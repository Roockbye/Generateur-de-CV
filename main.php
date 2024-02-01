<?php
// login.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifiez les informations d'identification ici
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Exemple simple : vérification de l'email et du mot de passe
    if ($email === 'votre_email@example.com' && $password === 'votre_mot_de_passe') {
        header('Location: dashboard.php'); // Redirige vers la page du tableau de bord après la connexion réussie
        exit();
    } else {
        $error_message = 'Identifiants incorrects';
    }
}
?>