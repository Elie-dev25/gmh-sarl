<?php
// db_connection.php
$servername = "localhost";
$username = "u935921700_Elie"; // Nom d'utilisateur de la base de données
$password = "Solution2024@"; // Mot de passe de la base de données
$dbname = "u935921700_test"; // Nom de la base de données

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}
?>
