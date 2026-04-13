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

// Récupérer les informations du formulaire
$current_password = $_POST['current_password'];
$new_password = $_POST['new_password'];
$confirm_password = $_POST['confirm_password'];

// Vérifier si le nouveau mot de passe et la confirmation correspondent
if ($new_password != $confirm_password) {
    echo "<script>alert('Le nouveau mot de passe et la confirmation ne correspondent pas');</script>";

    exit();
}

// Vérifier si le mot de passe actuel est correct
$sql = "SELECT password FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($hashed_password);
$stmt->fetch();
$stmt->close();

if (!password_verify($current_password, $hashed_password)) {
    echo "<script>alert('Le mot de passe actuel est incorrect');</script>";
    exit();
}

// Hacher le nouveau mot de passe
$new_hashed_password = password_hash($new_password, PASSWORD_BCRYPT);

// Mettre à jour le mot de passe dans la base de données
$sql = "UPDATE users SET password = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $new_hashed_password, $user_id);

if ($stmt->execute()) {
    echo "<script>alert('Votre mot de passe a été mis à jour avec succès.');</script>";
    header("Location: ../pages/account.php");
    exit();
} else {
    echo "<script>alert('Erreur lors de la mise à jour du mot de passe :');</script>" . $conn->error;
}

$stmt->close();
$conn->close();
?>
