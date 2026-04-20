<?php
/**
 * Extended Security Tests for better coverage
 */

use PHPUnit\Framework\TestCase;

class SecurityExtendedTest extends TestCase
{
    protected function setUp(): void
    {
        $_SESSION = [];
        $_SERVER['REMOTE_ADDR'] = '127.0.0.1';
    }

    /**
     * Test isAdmin - not admin
     */
    public function testIsAdminFalse()
    {
        $this->assertFalse(isAdmin());
    }

    /**
     * Test isAdmin - is admin
     */
    public function testIsAdminTrue()
    {
        $_SESSION['is_admin'] = true;
        $this->assertTrue(isAdmin());
    }

    /**
     * Test getCurrentUserId - no session
     */
    public function testGetCurrentUserIdNull()
    {
        $this->assertNull(getCurrentUserId());
    }

    /**
     * Test getCurrentUserEmail - no session
     */
    public function testGetCurrentUserEmailNull()
    {
        $this->assertNull(getCurrentUserEmail());
    }

    /**
     * Test password strength - missing uppercase
     */
    public function testPasswordMissingUppercase()
    {
        $result = validatePasswordStrength('lowercase123');
        $this->assertFalse($result['valid']);
        $this->assertContains('Password must contain uppercase letter', $result['errors']);
    }

    /**
     * Test password strength - missing lowercase
     */
    public function testPasswordMissingLowercase()
    {
        $result = validatePasswordStrength('UPPERCASE123');
        $this->assertFalse($result['valid']);
        $this->assertContains('Password must contain lowercase letter', $result['errors']);
    }

    /**
     * Test password strength - missing number
     */
    public function testPasswordMissingNumber()
    {
        $result = validatePasswordStrength('NoNumbersHere');
        $this->assertFalse($result['valid']);
        $this->assertContains('Password must contain number', $result['errors']);
    }

    /**
     * Test password strength - too short
     */
    public function testPasswordTooShort()
    {
        $result = validatePasswordStrength('Ab1');
        $this->assertFalse($result['valid']);
        $this->assertContains('Password must be at least 8 characters', $result['errors']);
    }

    /**
     * Test various valid email formats
     */
    public function testValidEmailFormats()
    {
        $this->assertTrue(isValidEmail('user@example.com'));
        $this->assertTrue(isValidEmail('user.name@example.co.uk'));
        $this->assertTrue(isValidEmail('user+tag@example.org'));
    }

    /**
     * Test various invalid email formats
     */
    public function testInvalidEmailFormats()
    {
        $this->assertFalse(isValidEmail('plaintext'));
        $this->assertFalse(isValidEmail('@example.com'));
        $this->assertFalse(isValidEmail('user@'));
        $this->assertFalse(isValidEmail(''));
    }

    /**
     * Test sanitizeOutput with various inputs
     */
    public function testSanitizeOutputVarious()
    {
        $this->assertEquals('&lt;b&gt;bold&lt;/b&gt;', sanitizeOutput('<b>bold</b>'));
        $this->assertEquals('&quot;quoted&quot;', sanitizeOutput('"quoted"'));
        $this->assertEquals('plain text', sanitizeOutput('plain text'));
    }

    /**
     * Test CSRF token - same token returned on multiple calls
     */
    public function testCSRFTokenConsistency()
    {
        $token1 = generateCSRFToken();
        $token2 = generateCSRFToken();
        
        $this->assertEquals($token1, $token2);
    }

    /**
     * Test CSRF verification with empty token
     */
    public function testVerifyCSRFTokenEmpty()
    {
        generateCSRFToken();
        $this->assertFalse(verifyCSRFToken(''));
    }

    /**
     * Test CSRF verification without generating token first
     */
    public function testVerifyCSRFTokenNoSessionToken()
    {
        $this->assertFalse(verifyCSRFToken('any_token'));
    }

    /**
     * Test rate limiting - resets after timeout
     */
    public function testRateLimitingResetAfterTimeout()
    {
        $_SESSION['rate_limit_login_127.0.0.1_attempts'] = 5;
        $_SESSION['rate_limit_login_127.0.0.1_timeout'] = time() - 1000; // Over 15 mins ago
        
        $result = isRateLimited('127.0.0.1', 'login');
        
        $this->assertFalse($result);
        $this->assertEquals(0, $_SESSION['rate_limit_login_127.0.0.1_attempts']);
    }

    /**
     * Test multiple failed login attempts
     */
    public function testMultipleFailedLogins()
    {
        recordFailedLogin('192.168.1.1');
        recordFailedLogin('192.168.1.1');
        recordFailedLogin('192.168.1.1');
        
        $this->assertEquals(3, $_SESSION['rate_limit_login_192.168.1.1_attempts']);
    }

    /**
     * Test session validation - missing login_time
     */
    public function testSessionValidationMissingLoginTime()
    {
        $_SESSION['user_id'] = 1;
        // No login_time set
        
        $this->assertFalse(isSessionValid());
    }

    /**
     * Test configureSecureSession function exists and is callable
     */
    public function testConfigureSecureSessionExists()
    {
        $this->assertTrue(function_exists('configureSecureSession'));
    }

    /**
     * Test configureSecureSession when session already active
     */
    public function testConfigureSecureSessionWhenActive()
    {
        // Session is already started by bootstrap
        // This should not throw any errors
        configureSecureSession();
        $this->assertTrue(true); // If we get here, no exception was thrown
    }

    /**
     * Test setSecurityHeaders function exists
     */
    public function testSetSecurityHeadersExists()
    {
        $this->assertTrue(function_exists('setSecurityHeaders'));
    }

    /**
     * Test requireLogin function exists
     */
    public function testRequireLoginExists()
    {
        $this->assertTrue(function_exists('requireLogin'));
    }

    /**
     * Test session IP mismatch detection
     */
    public function testSessionIPMismatch()
    {
        $_SESSION['user_id'] = 1;
        $_SESSION['login_time'] = time();
        $_SESSION['ip_address'] = '192.168.1.100'; // Different from REMOTE_ADDR (127.0.0.1)
        
        // Should still return true but log a warning
        $result = isSessionValid();
        $this->assertTrue($result);
    }

    /**
     * Test CSRF token with custom max age
     */
    public function testVerifyCSRFTokenCustomMaxAge()
    {
        $token = generateCSRFToken();
        $_SESSION['csrf_token_time'] = time() - 100; // 100 seconds ago
        
        // Should be valid with 200 second max age
        $this->assertTrue(verifyCSRFToken($token, 200));
        
        // Should be invalid with 50 second max age
        $_SESSION['csrf_token_time'] = time() - 100;
        $this->assertFalse(verifyCSRFToken($token, 50));
    }

    /**
     * Test rate limiting with different actions
     */
    public function testRateLimitingDifferentActions()
    {
        $this->assertFalse(isRateLimited('127.0.0.1', 'register'));
        $this->assertFalse(isRateLimited('127.0.0.1', 'contact'));
        $this->assertFalse(isRateLimited('127.0.0.1', 'password_reset'));
    }

    /**
     * Test password validation - all requirements met
     */
    public function testPasswordAllRequirements()
    {
        $result = validatePasswordStrength('MyP@ssw0rd123');
        $this->assertTrue($result['valid']);
        $this->assertEmpty($result['errors']);
    }

    /**
     * Test password validation - multiple errors
     */
    public function testPasswordMultipleErrors()
    {
        $result = validatePasswordStrength('abc');
        $this->assertFalse($result['valid']);
        $this->assertGreaterThan(1, count($result['errors']));
    }
}
