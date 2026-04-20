<?php
// Skip execution during PHPUnit coverage analysis
if (defined('PHPUNIT_RUNNING')) { return; }

session_start();

// Inclure la connexion à la base de données et la sécurité
include_once __DIR__ . '/../config/db_connection.php';
include_once __DIR__ . '/../config/security.php';

// Verify CSRF token
if (!isset($_POST['csrf_token']) || !verifyCSRFToken($_POST['csrf_token'])) {
    header("Location: ../pages/account.php?error=" . urlencode("Invalid security token. Please try again."));
    exit();
}

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header("Location: ../pages/login.php");
    exit();
}

// Récupérer l'ID de l'utilisateur (cast to int for safety)
$user_id = (int)$_SESSION['user_id'];

// Récupérer et valider les nouvelles informations du formulaire
$name = trim($_POST['name'] ?? '');
$email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$phone = trim($_POST['phone'] ?? '');

// Validate required fields
if (empty($name) || empty($email)) {
    header("Location: ../pages/account.php?error=" . urlencode("Name and email are required."));
    exit();
}

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../pages/account.php?error=" . urlencode("Invalid email format."));
    exit();
}

// Sanitize name (prevent XSS)
$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');

// Validate phone format (optional but if provided, must be valid)
if (!empty($phone) && !preg_match('/^\+?[0-9\s\-\(\)]{6,20}$/', $phone)) {
    header("Location: ../pages/account.php?error=" . urlencode("Invalid phone number format."));
    exit();
}

// Check if email is already used by another user
$sql_check = "SELECT id FROM users WHERE email = ? AND id != ? LIMIT 1";
$stmt_check = $conn->prepare($sql_check);

if (!$stmt_check) {
    error_log("Database error: " . $conn->error);
    header("Location: ../pages/account.php?error=" . urlencode("An error occurred. Please try again."));
    exit();
}

$stmt_check->bind_param("si", $email, $user_id);
$stmt_check->execute();
$result_check = $stmt_check->get_result();

if ($result_check->num_rows > 0) {
    header("Location: ../pages/account.php?error=" . urlencode("This email is already used by another account."));
    exit();
}
$stmt_check->close();

// Préparer la requête pour mettre à jour les informations
$sql = "UPDATE users SET name = ?, email = ?, phone = ? WHERE id = ?";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    error_log("Database error: " . $conn->error);
    header("Location: ../pages/account.php?error=" . urlencode("An error occurred. Please try again."));
    exit();
}

$stmt->bind_param("sssi", $name, $email, $phone, $user_id);

if ($stmt->execute()) {
    // Update session email if changed
    $_SESSION['email'] = $email;
    $_SESSION['name'] = $name;
    
    error_log("User info updated for user: " . $user_id);
    header("Location: ../pages/account.php?success=" . urlencode("Your information has been updated successfully."));
    exit();
} else {
    error_log("User info update failed: " . $stmt->error);
    header("Location: ../pages/account.php?error=" . urlencode("Error updating information. Please try again."));
    exit();
}

$stmt->close();
$conn->close();
?>
