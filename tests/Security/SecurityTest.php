<?php
/**
 * Security Tests - CSRF, Rate Limiting, Session Validation
 */

use PHPUnit\Framework\TestCase;

class SecurityTest extends TestCase
{
    protected function setUp(): void
    {
        // Reset session for each test
        $_SESSION = [];
        $_SERVER['REMOTE_ADDR'] = '127.0.0.1';
    }

    /**
     * Test CSRF token generation
     */
    public function testGenerateCSRFToken()
    {
        $token1 = generateCSRFToken();
        
        $this->assertNotEmpty($token1);
        $this->assertIsString($token1);
        $this->assertEquals(64, strlen($token1)); // bin2hex of 32 bytes = 64 chars
    }

    /**
     * Test CSRF token verification - valid token
     */
    public function testVerifyCSRFTokenValid()
    {
        $token = generateCSRFToken();
        $result = verifyCSRFToken($token);
        
        $this->assertTrue($result);
    }

    /**
     * Test CSRF token verification - invalid token
     */
    public function testVerifyCSRFTokenInvalid()
    {
        generateCSRFToken();
        $result = verifyCSRFToken('invalid_token');
        
        $this->assertFalse($result);
    }

    /**
     * Test CSRF token expiration
     */
    public function testVerifyCSRFTokenExpired()
    {
        $token = generateCSRFToken();
        $_SESSION['csrf_token_time'] = time() - 3700; // 1 hour + 100 seconds
        
        $result = verifyCSRFToken($token);
        
        $this->assertFalse($result);
    }

    /**
     * Test rate limiting - under limit
     */
    public function testRateLimitingNotTriggered()
    {
        $result = isRateLimited('127.0.0.1', 'login');
        
        $this->assertFalse($result);
    }

    /**
     * Test rate limiting - exceeded limit
     */
    public function testRateLimitingTriggered()
    {
        $_SESSION['rate_limit_login_127.0.0.1_attempts'] = 5;
        $_SESSION['rate_limit_login_127.0.0.1_timeout'] = time();
        
        $result = isRateLimited('127.0.0.1', 'login');
        
        $this->assertTrue($result);
    }

    /**
     * Test recording failed login
     */
    public function testRecordFailedLogin()
    {
        recordFailedLogin('127.0.0.1');
        
        $this->assertIsset($_SESSION['rate_limit_login_127.0.0.1_attempts']);
        $this->assertEquals(1, $_SESSION['rate_limit_login_127.0.0.1_attempts']);
    }

    /**
     * Test session validation - no user ID
     */
    public function testSessionValidationNoUserId()
    {
        $result = isSessionValid();
        
        $this->assertFalse($result);
    }

    /**
     * Test session validation - valid session
     */
    public function testSessionValidationValid()
    {
        $_SESSION['user_id'] = 1;
        $_SESSION['login_time'] = time();
        $_SESSION['ip_address'] = '127.0.0.1';
        
        $result = isSessionValid();
        
        $this->assertTrue($result);
    }

    /**
     * Test session validation - expired session
     */
    public function testSessionValidationExpired()
    {
        $_SESSION['user_id'] = 1;
        $_SESSION['login_time'] = time() - 1900; // 31 minutes 40 seconds ago
        
        $result = isSessionValid();
        
        $this->assertFalse($result);
    }

    /**
     * Test email validation - valid
     */
    public function testValidEmailValid()
    {
        $result = isValidEmail('user@example.com');
        
        $this->assertTrue($result);
    }

    /**
     * Test email validation - invalid
     */
    public function testValidEmailInvalid()
    {
        $result = isValidEmail('not-an-email');
        
        $this->assertFalse($result);
    }

    /**
     * Test password strength - weak password
     */
    public function testPasswordStrengthWeak()
    {
        $result = validatePasswordStrength('weak');
        
        $this->assertFalse($result['valid']);
        $this->assertNotEmpty($result['errors']);
    }

    /**
     * Test password strength - strong password
     */
    public function testPasswordStrengthStrong()
    {
        $result = validatePasswordStrength('SecurePass123');
        
        $this->assertTrue($result['valid']);
        $this->assertEmpty($result['errors']);
    }

    /**
     * Test output sanitization
     */
    public function testSanitizeOutput()
    {
        $input = '<script>alert("xss")</script>';
        $output = sanitizeOutput($input);
        
        $this->assertStringNotContainsString('<script>', $output);
        $this->assertStringContainsString('&lt;script&gt;', $output);
    }

    /**
     * Test get current user ID
     */
    public function testGetCurrentUserId()
    {
        $_SESSION['user_id'] = 42;
        
        $result = getCurrentUserId();
        
        $this->assertEquals(42, $result);
    }

    /**
     * Test get current user email
     */
    public function testGetCurrentUserEmail()
    {
        $_SESSION['email'] = 'test@example.com';
        
        $result = getCurrentUserEmail();
        
        $this->assertEquals('test@example.com', $result);
    }

    /**
     * Test logout function
     */
    public function testLogout()
    {
        $_SESSION['user_id'] = 1;
        $_SESSION['email'] = 'test@example.com';
        
        logout();
        
        $this->assertEmpty($_SESSION);
    }
}
?>
