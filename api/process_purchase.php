<?php
session_start();
include(__DIR__ . '/../config/db_connection.php');

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header("Location: ../pages/login.php");
    exit();
}

// Récupérer l'ID de l'utilisateur connecté
$user_id = $_SESSION['user_id'];

// Récupérer le nom du produit envoyé par le formulaire
$product_name = $_POST['product_name'];

// Insérer l'achat dans la base de données
$sql = "INSERT INTO purchases (user_id, product_name, purchase_date) 
        VALUES ('$user_id', '$product_name', NOW())";

if ($conn->query($sql) === TRUE) {
    header("Location: ../pages/produits.php");
} else {
    echo "<script>alert('Aucun compte trouvé avec cet email.Erreur lors de l'enregistrement de l'achat :');</script>" . $conn->error;
}

$conn->close();
?>