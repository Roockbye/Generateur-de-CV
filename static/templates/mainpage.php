<?php 
    // Inclure le fichier principal
    include "../../server/mainpage.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link type="text/css" rel="stylesheet" href="../css/mainpage.css">
</head>
<body>
    <div class="header">
        <h1>Bienvenue sur le générateur de CV  <?php echo $_SESSION['username']; ?></h1>
        <a href="../../server/deconnexion.php"><button>Se déconnecter</button></a>
    </div>

    <div class="nav">
        <a href="#" class="active">Home</a>
        <a href="#">Modèles</a>
        <a href="#">Mes CVS</a>
    </div>

    <div class="bodyArea">
        <h2>Formulaire</h2>
        <form id="cv-form" name="data" action="CV.php" method="post">
            <!-- Section: Informations de base -->
            <div class="form-section">
                <h2>Informations de base</h2>
                <div class="form-row">
                    <label for="name">Nom:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-row">
                    <label for="firstname">Prénom:</label>
                    <input type="text" id="firstname" name="firstname" required>
                </div>
                <div class="form-row">
                    <label for="titre">Titre:</label>
                    <input type="text" id="titre" name="titre">
                </div>
                <div class="form-row">
                    <label for="address">Adresse:</label>
                    <input type="text" id="address" name="address" required>
                </div>
                <div class="form-row">
                    <label for="phone">Téléphone:</label>
                    <input type="text" id="phone" name="phone" required>
                </div>
                <div class="form-row">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-row">
                    <label for="apropos">A propos de moi:</label>
                    <textarea id="apropos" name="apropos"></textarea>
                </div>
            </div>

            <!-- Section: Compétences -->
            <div class="form-section">
                <h2>Compétences</h2>
                <div class="form-row">
                    <label for="skills">Entrez vos compétences, séparées par une virgule:</label>
                    <input type="text" id="skills" name="skills" required>
                </div>
            </div>

            <!-- Section: Expérience de travail -->
            <div class="form-section">
                <h2>Expérience de travail</h2>
                <div id="work-experience">
                    <div class="form-row">
                        <label for="company">Nom de l'entreprise:</label>
                        <input type="text" id="company" name="company" required>
                        <div class="form-row">
                        <label for="position">Poste occupé:</label>
                        <input type="text" id="position" name="position" required>
                    </div>
                    <div class="form-row">
                        <label for="start-date">Date de début:</label>
                        <input type="date" id="start-date" name="start-date" required>
                    </div>
                    <div class="form-row">
                        <label for="end-date">Date de fin:</label>
                        <input type="date" id="end-date" name="end-date" required>
                    </div>
                    <div class="form-row">
                        <label for="description">Description des tâches:</label>
                        <textarea id="description" name="description" required></textarea>
                    </div>
                </div>
                <button type="button" id="add-work-experience">Ajouter une expérience de travail</button>
            </div>

            <!-- Section: Formation -->
            <div class="form-section">
                <h2>Formation</h2>
                <div id="education">
                    <div class="form-row">
                        <label for="school">Nom de l'école:</label>
                        <input type="text" id="school" name="school" required>
                    </div>
                    <div class="form-row">
                        <label for="degree">Diplôme obtenu:</label>
                        <input type="text" id="degree" name="degree" required>
                    </div>
                    <div class="form-row">
                        <label for="start-year">Année de début:</label>
                        <input type="date" id="start-year" name="start-year" required>
                    </div>
                    <div class="form-row">
                        <label for="end-year">Année de fin:</label>
                        <input type="date" id="end-year" name="end-year" required>
                    </div>
                    <div class="form-row">
                        <label for="field-of-study">Domaine d'étude:</label>
                        <input type="text" id="field-of-study" name="field" required>
                    </div>
                </div>
                <button type="button" id="add-education">Ajouter une formation</button>
            </div>

            <!-- Section: Hobbies -->
            <div class="form-section">
                <h2>Hobbies</h2>
                <div class="form-row">
                    <label for="hobbies">Entrez vos hobbies, séparées par une virgule:</label>
                    <input type="text" id="hobbies" name="hobbies">
                </div>
            </div>

            <!-- Bouton de soumission du formulaire -->
            <button type="submit" id="submit-button" name="submit">Générer mon CV</button>
        </form>
    </div>
</body>
</html>
