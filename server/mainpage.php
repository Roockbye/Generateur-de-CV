<?php
session_start();
if (!$_SESSION['password']){
    header('Location: connexion.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Connexion à la base de données
    $bdd = new PDO('mysql:host=localhost;dbname=db_cv;charset=utf8', 'root', '');

    // Vérification de la connexion à la base de données
    if (!$bdd) {
        die("La connexion à la base de données a échoué");
    }

    // Récupération des données du formulaire
    $nom = $_POST['lastname'];
    $prenom = $_POST['firstname'];
    $titre = $_POST['titre'];
    $mail = $_POST['email'];
    $numero = $_POST['phone'];
    $adresse = $_POST['address'];
    $resume = $_POST['apropos'];
    $skills = $_POST['skills'];
    $company = $_POST['company'];
    $position = $_POST['position'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $description = $_POST['description'];
    $school = $_POST['school'];
    $degree = $_POST['degree'];
    $start_year = $_POST['start_year'];
    $end_year = $_POST['end_year'];
    $field = $_POST['field'];
    $hobbies = $_POST['hobbies'];

    // Requête SQL pour insérer les données dans la base de données
    $sql = "INSERT INTO cv (titre, firstname, lastname, email, phone, address, apropos, skills)
            VALUES ('$titre', '$prenom', '$nom', '$mail', '$numero', '$adresse', '$resume', '$skills')";
    $bdd->exec($sql);

    $cv_id = $bdd->lastInsertId(); // Récupérer l'ID du CV inséré

    // Requête SQL pour insérer les données d'expérience professionnelle dans la base de données
    $sql = "INSERT INTO experiences (id_cv, company, position, start_date, end_date, description)
            VALUES ('$cv_id', '$company', '$position', '$start_date', '$end_date', '$description')";
    $bdd->exec($sql);

    // Requête SQL pour insérer les données de formation dans la base de données
    $sql = "INSERT INTO education (id_cv, school, degree, start_year, end_year, field)
            VALUES ('$cv_id', '$school', '$degree', '$start_year', '$end_year', '$field')";
    $bdd->exec($sql);

    // Requête SQL pour insérer les données de hobbies dans la base de données
    $sql = "INSERT INTO hobbies (id_cv, hobbies)
            VALUES ('$cv_id', '$hobbies')";
    $bdd->exec($sql);

    // Rediriger vers la page du CV généré
    header('Location: template.php?cv_id=' . $cv_id);
    exit(); // Arrêter l'exécution du script
}

?>

