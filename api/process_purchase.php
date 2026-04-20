<?php
// Skip execution during PHPUnit coverage analysis
if (defined('PHPUNIT_RUNNING')) { return; }

session_start();
include_once __DIR__ . '/../config/db_connection.php';
include_once __DIR__ . '/../config/security.php';

// Verify CSRF token
if (!isset($_POST['csrf_token']) || !verifyCSRFToken($_POST['csrf_token'])) {
    header("Location: ../pages/produits.php?error=" . urlencode("Invalid security token. Please try again."));
    exit();
}

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header("Location: ../pages/login.php");
    exit();
}

// Récupérer l'ID de l'utilisateur connecté
$user_id = (int)$_SESSION['user_id'];

// Récupérer et valider le nom du produit envoyé par le formulaire
$product_name = trim($_POST['product_name'] ?? '');

if (empty($product_name)) {
    header("Location: ../pages/produits.php?error=" . urlencode("Product name is required."));
    exit();
}

// Sanitize product name
$product_name = htmlspecialchars($product_name, ENT_QUOTES, 'UTF-8');

// Insérer l'achat dans la base de données avec prepared statement
$sql = "INSERT INTO purchases (user_id, product_name, purchase_date) VALUES (?, ?, NOW())";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    error_log("Database error: " . $conn->error);
    header("Location: ../pages/produits.php?error=" . urlencode("An error occurred. Please try again."));
    exit();
}

$stmt->bind_param("is", $user_id, $product_name);

if ($stmt->execute()) {
    header("Location: ../pages/produits.php?success=" . urlencode("Purchase recorded successfully."));
} else {
    error_log("Purchase insert failed: " . $stmt->error);
    header("Location: ../pages/produits.php?error=" . urlencode("Error recording purchase. Please try again."));
}

$stmt->close();
$conn->close();
?>