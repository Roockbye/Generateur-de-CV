<?php
session_start();

//test - à finir
if (isset($_GET['id'])) {
    // Récupérez l'identifiant du CV depuis l'URL
    $cv_id = $_GET['id'];
    echo "<h1>Détails du CV</h1>";
    echo "<p>CV ID: $id_cv</p>";
} else {
    echo "<p>Aucun CV sélectionné.</p>";
}
?>