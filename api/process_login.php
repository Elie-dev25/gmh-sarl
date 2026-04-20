<?php
// process_login.php - SECURE VERSION with prepared statements & CSRF
// Skip execution during PHPUnit coverage analysis
if (defined('PHPUNIT_RUNNING')) { return; }

session_start();
include_once __DIR__ . '/../config/db_connection.php';
include_once __DIR__ . '/../config/security.php';

// Verify CSRF token
if (!isset($_POST['csrf_token']) || !verifyCSRFToken($_POST['csrf_token'])) {
    header("Location: ../pages/login.php?error=" . urlencode("Invalid security token. Please try again."));
    exit();
}

// Check rate limiting
if (isRateLimited($_SERVER['REMOTE_ADDR'], 'login')) {
    header("Location: ../pages/login.php?error=" . urlencode("Too many login attempts. Please try again later."));
    exit();
}

// Input validation
$email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$password = trim($_POST['password'] ?? '');

if (empty($email) || empty($password)) {
    header("Location: ../pages/login.php?error=" . urlencode("Email and password are required."));
    exit();
}

// ✅ FIXED: Use prepared statement (prevent SQL injection)
$sql = "SELECT id, name, email, password FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    error_log("Database error: " . $conn->error);
    header("Location: ../pages/login.php?error=" . urlencode("An error occurred. Please try again."));
    exit();
}

$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    
    // Verify password with bcrypt
    if (password_verify($password, $user['password'])) {
        // Initialize session with security measures
        session_regenerate_id(true);
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['login_time'] = time();
        $_SESSION['ip_address'] = $_SERVER['REMOTE_ADDR'];
        
        // Log successful login
        error_log("Login success for: " . $email);
        
        header("Location: ../pages/account.php");
        exit();
    } else {
        // Log failed attempt
        recordFailedLogin($_SERVER['REMOTE_ADDR']);
        error_log("Login failed - wrong password for: " . $email);
        header("Location: ../pages/login.php?error=" . urlencode("Incorrect password."));
        exit();
    }
} else {
    // Log failed attempt
    recordFailedLogin($_SERVER['REMOTE_ADDR']);
    error_log("Login failed - email not found: " . $email);
    header("Location: ../pages/login.php?error=" . urlencode("No account found with this email."));
    exit();
}

$stmt->close();
$conn->close();
?>
