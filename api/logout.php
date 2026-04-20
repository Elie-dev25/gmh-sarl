<?php
// logout.php
// Skip execution during PHPUnit coverage analysis
if (defined('PHPUNIT_RUNNING')) { return; }

session_start();
include_once __DIR__ . '/../config/security.php';

// Log the logout
if (isset($_SESSION['user_id'])) {
    error_log("User logged out: " . $_SESSION['user_id']);
}

// Use secure logout function
logout();

// Clear session cookie
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

header("Location: ../index.php");
exit();
?>
