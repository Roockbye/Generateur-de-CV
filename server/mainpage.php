<?php
session_start();
if (!$_SESSION['password']){
    header('Location: connexion.php');
}

// Vérifier si l'identifiant du CV est présent dans la session
if (isset($_SESSION['id_cv'])) {
        // Afficher le lien vers le CV enregistré
        echo "<p><a href='cv_details.php'>Voir mon CV</a></p>";
    } else {
        echo "<p>Aucun CV enregistré.</p>";
    }
?>

