<?php
session_start();

// Données valides pour tester
$correct_username = "admin";
$correct_password = "stegsteg";

// Récupère ce que l'utilisateur a saisi
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Vérifie les données
if ($username === $correct_username && $password === $correct_password) {
    $_SESSION['username'] = $username;
    header("Location: welcome.php");
    exit();
} else {
    $_SESSION['login_error'] = "Nom d'utilisateur ou mot de passe incorrect.";
    header("Location: index.php");
    exit();
}
