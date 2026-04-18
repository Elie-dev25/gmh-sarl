<?php
/**
 * Input Validation Tests
 */

use PHPUnit\Framework\TestCase;

class InputValidationTest extends TestCase
{
    /**
     * Test email sanitization
     */
    public function testEmailSanitization()
    {
        $email = "  user@example.com  ";
        $sanitized = filter_var(trim($email), FILTER_SANITIZE_EMAIL);
        
        $this->assertEquals('user@example.com', $sanitized);
    }

    /**
     * Test email validation - SQL injection attempt
     */
    public function testEmailValidationSQLInjection()
    {
        $email = "user@example.com' OR '1'='1";
        $result = filter_var($email, FILTER_VALIDATE_EMAIL);
        
        $this->assertFalse($result); // Invalid email
    }

    /**
     * Test password length validation
     */
    public function testPasswordLengthValidation()
    {
        $password = "short";
        $valid = strlen($password) >= 8;
        
        $this->assertFalse($valid);
    }

    /**
     * Test password uppercase requirement
     */
    public function testPasswordUppercaseRequirement()
    {
        $password = "nouppercase123";
        $hasUppercase = preg_match('/[A-Z]/', $password);
        
        $this->assertEquals(0, $hasUppercase);
    }

    /**
     * Test name sanitization
     */
    public function testNameSanitization()
    {
        $name = "<script>alert('xss')</script>";
        $sanitized = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
        
        $this->assertStringNotContainsString('<script>', $sanitized);
    }

    /**
     * Test phone number format
     */
    public function testPhoneNumberFormat()
    {
        $phone = "+33612345678";
        $valid = preg_match('/^\+?[1-9]\d{1,14}$/', $phone);
        
        $this->assertEquals(1, $valid);
    }

    /**
     * Test phone number validation - invalid
     */
    public function testPhoneNumberInvalid()
    {
        $phone = "abc123";
        $valid = preg_match('/^\+?[1-9]\d{1,14}$/', $phone);
        
        $this->assertEquals(0, $valid);
    }
}
?>
