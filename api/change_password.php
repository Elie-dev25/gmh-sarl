<?php
// Skip execution during PHPUnit coverage analysis
if (defined('PHPUNIT_RUNNING')) {
    return;
}

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

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

// Récupérer et valider les informations du formulaire
$current_password = trim($_POST['current_password'] ?? '');
$new_password = trim($_POST['new_password'] ?? '');
$confirm_password = trim($_POST['confirm_password'] ?? '');

// Validate required fields
if (empty($current_password) || empty($new_password) || empty($confirm_password)) {
    header("Location: ../pages/account.php?error=" . urlencode("All password fields are required."));
    exit();
}

// Vérifier si le nouveau mot de passe et la confirmation correspondent
if ($new_password !== $confirm_password) {
    header("Location: ../pages/account.php?error=" . urlencode("New password and confirmation do not match."));
    exit();
}

// Validate password strength
$password_validation = validatePasswordStrength($new_password);
if (!$password_validation['valid']) {
    header("Location: ../pages/account.php?error=" . urlencode(implode('. ', $password_validation['errors'])));
    exit();
}

// Vérifier si le mot de passe actuel est correct
$sql = "SELECT password FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    error_log("Database error: " . $conn->error);
    header("Location: ../pages/account.php?error=" . urlencode("An error occurred. Please try again."));
    exit();
}

$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($hashed_password);
$stmt->fetch();
$stmt->close();

if (!password_verify($current_password, $hashed_password)) {
    error_log("Password change failed - wrong current password for user: " . $user_id);
    header("Location: ../pages/account.php?error=" . urlencode("Current password is incorrect."));
    exit();
}

// Hacher le nouveau mot de passe avec cost factor
$new_hashed_password = password_hash($new_password, PASSWORD_BCRYPT, ['cost' => 12]);

// Mettre à jour le mot de passe dans la base de données
$sql = "UPDATE users SET password = ? WHERE id = ?";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    error_log("Database error: " . $conn->error);
    header("Location: ../pages/account.php?error=" . urlencode("An error occurred. Please try again."));
    exit();
}

$stmt->bind_param("si", $new_hashed_password, $user_id);

if ($stmt->execute()) {
    error_log("Password changed successfully for user: " . $user_id);
    header("Location: ../pages/account.php?success=" . urlencode("Your password has been updated successfully."));
    exit();
} else {
    error_log("Password update failed: " . $stmt->error);
    header("Location: ../pages/account.php?error=" . urlencode("Error updating password. Please try again."));
    exit();
}

$stmt->close();
$conn->close();
?>
