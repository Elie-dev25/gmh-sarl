<?php
/**
 * Destructive session tests - must run LAST because they close/destroy the session.
 * File prefixed with 'Z' to guarantee it runs after SecurityTest.php in the Security suite,
 * and the Security suite runs after the Unit suite per phpunit.xml order.
 */

use PHPUnit\Framework\TestCase;

class ZSessionTest extends TestCase
{
    /**
     * Test logout destroys active session.
     * Covers line 304 (session_destroy branch) in config/security.php.
     */
    public function testLogoutDestroysActiveSession()
    {
        // Ensure session is active before logout
        if (session_status() !== PHP_SESSION_ACTIVE) {
            @session_start();
        }

        $_SESSION['user_id'] = 99;
        $_SESSION['email'] = 'logout@test.com';

        @logout();

        $this->assertEmpty($_SESSION);
    }

    /**
     * Test configureSecureSession when session is NOT active.
     * Covers lines 23-55 (the entire PHP_SESSION_NONE branch body) in config/security.php.
     *
     * Runs AFTER testLogoutDestroysActiveSession which destroyed the session,
     * so session_status() === PHP_SESSION_NONE here and we enter the body.
     */
    public function testConfigureSecureSessionWhenNotActive()
    {
        // Make sure session is closed
        if (session_status() === PHP_SESSION_ACTIVE) {
            @session_write_close();
        }

        // Suppress header/cookie warnings (headers already sent in CLI mode)
        @configureSecureSession();

        $this->assertEquals(PHP_SESSION_NONE, session_status());
    }
}
