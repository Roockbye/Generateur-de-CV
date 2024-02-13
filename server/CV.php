<?php
// Connexion à la base de données
try {
    $db = new PDO('mysql:host=localhost;dbname=db_cv;charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}

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

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si toutes les données requises sont présentes
    if (isset($_POST['lastname'], $_POST['firstname'], $_POST['titre'], $_POST['email'], $_POST['phone'], $_POST['address'], $_POST['apropos'], $_POST['hobbies'])) {
        // Préparer la requête d'insertion
        $query = $db->prepare('INSERT INTO cv (lastname, firstname, titre, email, phone, address, apropos, hobbies) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
        
        // Exécuter la requête avec les valeurs des champs du formulaire
        try {
            $query->execute(array($nom,$prenom,$titre,$mail,$numero,$adresse,$resume,$hobbies));
            //echo "Données insérées avec succès.";
        } catch (PDOException $e) {
            die("Erreur lors de l'insertion des données : " . $e->getMessage());
        }
    } else {
        echo "Tous les champs requis doivent être remplis.";
    }

    // Vérifier si toutes les données requises pour "education" sont présentes
    if (isset($_POST['school'], $_POST['degree'], $_POST['start_year'], $_POST['end_year'], $_POST['field'])) {
        // Préparer la requête d'insertion pour "education"
        $query_education = $db->prepare('INSERT INTO education (school, degree, start_year, end_year, field) VALUES (?, ?, ?, ?, ?)');
        
        // Exécuter la requête pour "education" avec les valeurs des champs du formulaire
        try {
            $query_education->execute(array($school, $degree, $start_year, $end_year, $field));
            //echo "Données d'éducation insérées avec succès.";
        } catch (PDOException $e) {
            die("Erreur lors de l'insertion des données d'éducation : " . $e->getMessage());
        }
    } else {
        echo "Tous les champs requis de l'éducation doivent être remplis.";
    }

     // Vérifier si toutes les données requises pour "experiences" sont présentes
     if (isset($_POST['company'], $_POST['position'], $_POST['start_date'], $_POST['end_date'], $_POST['description'])) {
        // Préparer la requête d'insertion pour "experiences"
        $query_experiences = $db->prepare('INSERT INTO experiences (company, position, start_date, end_date, description) VALUES (?, ?, ?, ?, ?)');
        
        // Exécuter la requête pour "experiences" avec les valeurs des champs du formulaire
        try {
            $query_experiences->execute(array($company, $position, $start_date, $end_date, $description));
            //echo "Données d'expériences insérées avec succès.";
        } catch (PDOException $e) {
            die("Erreur lors de l'insertion des données d'expériences : " . $e->getMessage());
        }
    } else {
        echo "Tous les champs requis des expériences doivent être remplis.";
    }

     // Vérifier si toutes les données requises pour "skills" sont présentes
     if (isset($_POST['skills'])) {
        // Préparer la requête d'insertion pour "skills"
        $query_skills = $db->prepare('INSERT INTO skills (skills) VALUES (?)');
        
        // Exécuter la requête pour "skills" avec les valeurs des champs du formulaire
        try {
            $query_skills->execute(array($skills));
            //echo "Données de compétences insérées avec succès.";
        } catch (PDOException $e) {
            die("Erreur lors de l'insertion des données de compétences : " . $e->getMessage());
        }
    } else {
        echo "Tous les champs requis des compétences doivent être remplis.";
    }


}

?>
