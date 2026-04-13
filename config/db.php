<?php
//db.php
$servername = "127.0.0.1:3306";
$username = "u935921700_Elie_dev237";
$password = "2024gmhsarL";
$dbname = "u935921700_ecommerce";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}
?>