<?php
// process_register.php - SECURE VERSION with prepared statements & CSRF
session_start();
include(__DIR__ . '/../config/db_connection.php');
include(__DIR__ . '/../config/security.php');

// Verify CSRF token
if (!isset($_POST['csrf_token']) || !verifyCSRFToken($_POST['csrf_token'])) {
    header("Location: ../pages/register.php?error=" . urlencode("Invalid security token. Please try again."));
    exit();
}

// Input validation & sanitization
$name = trim($_POST['name'] ?? '');
$email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$password = trim($_POST['password'] ?? '');
$phone = trim($_POST['phone'] ?? '');

// Validate inputs
if (empty($name) || empty($email) || empty($password) || empty($phone)) {
    header("Location: ../pages/register.php?error=" . urlencode("All fields are required."));
    exit();
}

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../pages/register.php?error=" . urlencode("Invalid email format."));
    exit();
}

// Validate password strength
if (strlen($password) < 8) {
    header("Location: ../pages/register.php?error=" . urlencode("Password must be at least 8 characters."));
    exit();
}

// Hash password with bcrypt
$hashed_password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);

// ✅ FIXED: Use prepared statement to check email existence
$sql_check = "SELECT id FROM users WHERE email = ? LIMIT 1";
$stmt_check = $conn->prepare($sql_check);

if (!$stmt_check) {
    error_log("Database error: " . $conn->error);
    header("Location: ../pages/register.php?error=" . urlencode("An error occurred. Please try again."));
    exit();
}

$stmt_check->bind_param("s", $email);
$stmt_check->execute();
$result_check = $stmt_check->get_result();

if ($result_check->num_rows > 0) {
    error_log("Registration failed - email already exists: " . $email);
    header("Location: ../pages/register.php?error=" . urlencode("This email is already registered. Please use a different email."));
    exit();
}

$stmt_check->close();

// ✅ FIXED: Use prepared statement for insert
$sql = "INSERT INTO users (name, email, password, phone) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    error_log("Database error: " . $conn->error);
    header("Location: ../pages/register.php?error=" . urlencode("An error occurred. Please try again."));
    exit();
}

$stmt->bind_param("ssss", $name, $email, $hashed_password, $phone);

if ($stmt->execute()) {
    error_log("Registration success: " . $email);
    header("Location: ../pages/login.php?success=" . urlencode("Registration successful! You can now log in."));
    exit();
} else {
    error_log("Registration insert failed: " . $stmt->error);
    header("Location: ../pages/register.php?error=" . urlencode("Registration failed. Please try again."));
    exit();
}

$stmt->close();
$conn->close();
?>
