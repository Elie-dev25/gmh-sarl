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

// Set mock environment variables for testing (prevents db.php from failing)
putenv('DB_HOST=localhost');
putenv('DB_PORT=3306');
putenv('DB_USERNAME=test_user');
putenv('DB_PASSWORD=test_pass');
putenv('DB_NAME=test_db');

// Include security functions for testing
require_once BASE_PATH . '/config/security.php';

// Start session for tests
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
