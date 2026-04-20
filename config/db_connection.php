<?php
// db_connection.php
require_once __DIR__ . '/env.php';

// Skip database connection during PHPUnit tests
if (defined('PHPUNIT_RUNNING') && PHPUNIT_RUNNING === true) {
    $conn = null;
    return;
}

// Load environment variables
Env::load();

$servername = Env::get('DB_HOST_ALT', Env::get('DB_HOST', 'localhost'));
$username = Env::get('DB_USERNAME_ALT', Env::get('DB_USERNAME', ''));
$password = Env::get('DB_PASSWORD_ALT', Env::get('DB_PASSWORD', ''));
$dbname = Env::get('DB_NAME_ALT', Env::get('DB_NAME', ''));

// Validate required credentials
if (empty($username) || empty($dbname)) {
    die("Database configuration error: Please set database credentials in your .env file");
}

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}
?>
