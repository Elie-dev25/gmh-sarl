
<?php
// process_login.php
session_start();
include(__DIR__ . '/../config/db_connection.php');

// Récupération des données du formulaire
$email = $_POST['email'];
$password = $_POST['password'];

// Vérifier si l'utilisateur existe dans la base de données
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    
    // Vérification du mot de passe
    if (password_verify($password, $user['password'])) {
        // Initialiser la session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['name'] = $user['name'];
        
        // Rediriger vers la page de compte
        header("Location: ../pages/account.php");
        exit();
    } else {
        echo "<script>alert('Mot de passe incorrect.');</script>" ;
    }
} else {
    echo "<script>alert('Aucun compte trouvé avec cet email.');</script>"; 

}

$conn->close();
?>
