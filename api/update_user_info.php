<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header("Location: ../pages/login.php");
    exit();
}

// Inclure la connexion à la base de données
include(__DIR__ . '/../config/db_connection.php');

// Récupérer l'ID de l'utilisateur
$user_id = $_SESSION['user_id'];

// Récupérer les nouvelles informations du formulaire
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Préparer la requête pour mettre à jour les informations
$sql = "UPDATE users SET name = ?, email = ?, phone = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssi", $name, $email, $phone, $user_id);

if ($stmt->execute()) {
    // Redirection après mise à jour réussie
    echo "<script>alert('Les informations ont été mises à jour avec succès.');</script>" 

    header("Location: ../pages/account.php");
    exit();
} else {
        echo "<script>alert('Erreur lors de la mise à jour des informations : ');</script>" . $conn->error;
}

$stmt->close();
$conn->close();
?>
