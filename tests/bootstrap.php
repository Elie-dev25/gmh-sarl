<?php
/**
 * PHPUnit Bootstrap file
 * Initialize test environment
 */

// Define base path
define('BASE_PATH', __DIR__ . '/..');

// Mock database connection for tests
if (!defined('PHPUNIT_RUNNING')) {
    define('PHPUNIT_RUNNING', true);
}

// Include security functions for testing
require_once BASE_PATH . '/config/security.php';

// Start session for tests
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
