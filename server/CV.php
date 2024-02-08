<?php
$bdd = new PDO('mysql:host=localhost;dbname=db_cv;charset=utf8;','root',"");
if(isset($_POST['submit'])){
    $nom = $_POST['name'];
    $prenom = $_POST['firstname'];
    $titre = $_POST['titre'];
    $mail = $_POST['email'];
    $numero = $_POST['phone'];
    $adresse = $_POST['address'];
    $resume = $_POST['apropos'];

    $competences = $_POST['skills'];

    $company = $_POST['company'];
    $poste = $_POST['position'];
    $date_debut = $_POST['start_date'];
    $date_fin = $_POST['end_date'];
    $tache = $_POST['description'];

    $ecole = $_POST['school'];
    $diplome = $_POST['degree'];
    $annee_debut = $_POST['start_year'];
    $annee_fin = $_POST['end_year'];
    $domaine = $_POST['field'];

    $hobbies = $_POST['hobbies'];

    $recupData = $bdd->prepare('INSERT INTO formulaire (name, firstname, titre, email,
    phone, address, apropos, skills, company, position, start_date, end_date, description,
    school, degree, start_year, end_year, field, hobbies)
    VALUE(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
    $recupData->execute(array($nom, $prenom, $titre, $mail, $numero, $adresse, $resume, $competences,
    $company, $poste, $date_debut, $date_fin, $tache, $ecole, $diplome, $annee_debut, $annee_fin, $domaine, $hobbies));




}
?>
