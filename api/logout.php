<?php
// logout.php

session_start();
session_destroy(); // Détruit toutes les sessions
header("Location: ../index.php"); // Redirige vers la page d'accueil
exit();
?>
