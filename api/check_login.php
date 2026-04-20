<?php
// Skip execution during PHPUnit coverage analysis
if (defined('PHPUNIT_RUNNING')) { return; }

session_start();
include_once __DIR__ . '/../config/security.php';

header('Content-Type: application/json');

// Use the secure session validation
if (isSessionValid()) {
    echo json_encode(['status' => 'logged_in', 'user_id' => getCurrentUserId()]);
} else {
    echo json_encode(['status' => 'not_logged_in']);
}
?>
