<?php
// process_register.php
include(__DIR__ . '/../config/db_connection.php');

// Récupération des données du formulaire
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];

// Hacher le mot de passe pour la sécurité
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

// Vérifier si l'email existe déjà dans la base de données
$sql_check = "SELECT * FROM users WHERE email = '$email'";
$result_check = $conn->query($sql_check);

if ($result_check->num_rows > 0) {
    echo "<script>alert('Cet email est déjà utilisé. Veuillez choisir un autre email');</script>";
} else {
    // Insérer les informations de l'utilisateur dans la base de données
    $sql = "INSERT INTO users (name, email, password, phone) VALUES ('$name', '$email', '$hashed_password', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Inscription réussie. Vous pouvez maintenant vous connecter.');</script>";
        // Rediriger vers la page de connexion
        header("Location: ../pages/login.php");
        exit();
    } else {
        echo "<script>alert('Erreur :');</script>" . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
