<?php
//db.php
require_once __DIR__ . '/env.php';

// Skip database connection during PHPUnit tests
if (defined('PHPUNIT_RUNNING') && PHPUNIT_RUNNING === true) {
    $conn = null;
    return;
}

// Load environment variables
Env::load();

$servername = Env::get('DB_HOST', 'localhost') . ':' . Env::get('DB_PORT', '3306');
$username = Env::get('DB_USERNAME', '');
$password = Env::get('DB_PASSWORD', '');
$dbname = Env::get('DB_NAME', '');

// Validate required credentials
if (empty($username) || empty($dbname)) {
    die("Database configuration error: Please set DB_USERNAME, DB_PASSWORD, and DB_NAME in your .env file");
}

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}
?>