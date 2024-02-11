<?php
session_start();

// Vérifiez si l'identifiant du CV est passé dans l'URL
if (isset($_GET['id'])) {
    // Récupérez l'identifiant du CV depuis l'URL
    $cv_id = $_GET['id'];
    
    // Chargez les détails du CV à partir de la base de données en utilisant $cv_id
    // ...
    // Affichez les détails du CV
    echo "<h1>Détails du CV</h1>";
    echo "<p>CV ID: $id_cv</p>";
    // Affichez d'autres détails du CV en fonction de vos besoins
} else {
    echo "<p>Aucun CV sélectionné.</p>";
}
?>