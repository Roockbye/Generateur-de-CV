<?php 
    //include "../templates/template.php";
    include "../../server/mainpage.php";
    //include "../../server/CV.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link type="text/css" rel="stylesheet" href="../css/mainpage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="header">
        <h1>Bienvenue sur le générateur de CV  <?php echo $_SESSION['username']; ?></h1>
        <a href="../../server/deconnexion.php"><button>Se déconnecter</button></a>
    </div>
    <div class="bodyArea">
        <h2>Formulaire</h2>
        <form id="cv-form" name="data" action="template.php" method="post">
            <!-- Section: Informations de base -->
            <div class="form-section">
                <h2>Informations de base</h2>
                <div class="form-row">
                    <label for="lastname">Nom:</label>
                    <input type="text" id="lastname" name="lastname" autocomplete="off" required>
                </div>
                <div class="form-row">
                    <label for="firstname">Prénom:</label>
                    <input type="text" id="firstname" name="firstname" autocomplete="off" required>
                </div>
                <div class="form-row">
                    <label for="titre">Titre:</label>
                    <input type="text" id="titre" name="titre" autocomplete="off">
                </div>
                <div class="form-row">
                    <label for="address">Adresse:</label>
                    <input type="text" id="address" name="address" autocomplete="off" required>
                </div>
                <div class="form-row">
                    <label for="phone">Téléphone:</label>
                    <input type="text" id="phone" name="phone" autocomplete="off" required>
                </div>
                <div class="form-row">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" autocomplete="off" required>
                </div>
                <div class="form-row">
                    <label for="apropos">A propos de moi:</label>
                    <textarea id="apropos" name="apropos" autocomplete="off"></textarea>
                </div>
            </div>

            <!-- Section: Compétences -->
            <div class="form-section">
                <h2>Compétences</h2>
                <div class="form-row">
                    <label for="skills">Entrez vos compétences, séparées par une virgule:</label>
                    <input type="text" id="skills" name="skills" autocomplete="off" required>
                </div>
            </div>

            <!-- Section: Expérience de travail -->
            <div class="form-section">
                <h2>Expérience de travail</h2>
                <div id="work-experience">
                    <div class="form-row">
                        <label for="company">Nom de l'entreprise:</label>
                        <input type="text" id="company" name="company" autocomplete="off" required>
                        <div class="form-row">
                        <label for="position">Poste occupé:</label>
                        <input type="text" id="position" name="position" autocomplete="off" required>
                    </div>
                    <div class="form-row">
                        <label for="start-date">Date de début:</label>
                        <input type="date" id="start-date" name="start_date" autocomplete="off" required>
                    </div>
                    <div class="form-row">
                        <label for="end-date">Date de fin:</label>
                        <input type="date" id="end-date" name="end_date" autocomplete="off" required>
                    </div>
                    <div class="form-row">
                        <label for="description">Description des tâches:</label>
                        <textarea id="description" name="description" autocomplete="off" required></textarea>
                    </div>
                </div>
                <div class="container">
                <div>
                <!-- Lien pour ouvrir la modal -->
                <a class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#addexp">
                <button  class="bi bi-file-earmark-plus" type="button" id="add-education">Ajouter une experience de travail</button>
                </a>
            </div>

    <!-- Modal -->
    <div class="modal fade" id="addexp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajouter une expérience</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form method="post" action="actions/addexperience.php" class="row g-3">
  <div class="col-md-6">
    <label for="company" class="form-label">Nom de l'entreprise:</label>
    <input type="text" id="company" class="form-control" name="company" autocomplete="off" required>
  </div>
  <div class="col-md-6">
    <label for="position" class="form-label">Poste occupé:</label>
    <input type="text" id="position" name="position" class="form-control" autocomplete="off" required>
  </div>
  <div class="col-12">
    <label for="start-date" class="form-label">Date de début:</label>
    <input type="date" id="start-date" name="start_date" class="form-control" autocomplete="off" required>
  </div>
  <div class="col-12">
    <label for="end-date" class="form-label">Date de fin:</label>
    <input type="date" id="end-date" name="end_date" class="form-control" autocomplete="off" required>
  </div>
  <div class="col-md-6">
    <label for="description" class="form-label">Description des tâches:</label>
    <textarea id="description" name="description" class="form-control" autocomplete="off" required></textarea>
  </div>
                        <button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

            <!-- Section: Formation -->
            <div class="form-section">
                <h2>Formation</h2>
                <div id="education">
                    <div class="form-row">
                        <label for="school">Nom de l'école:</label>
                        <input type="text" id="school" name="school" autocomplete="off" required>
                    </div>
                    <div class="form-row">
                        <label for="degree">Diplôme obtenu:</label>
                        <input type="text" id="degree" name="degree" autocomplete="off" required>
                    </div>
                    <div class="form-row">
                        <label for="start-year">Année de début:</label>
                        <input type="date" id="start-year" name="start_year" autocomplete="off" required>
                    </div>
                    <div class="form-row">
                        <label for="end-year">Année de fin:</label>
                        <input type="date" id="end-year" name="end_year" autocomplete="off" required>
                    </div>
                    <div class="form-row">
                        <label for="field-of-study">Domaine d'étude:</label>
                        <input type="text" id="field-of-study" name="field" autocomplete="off" required>
                    </div>
                </div>

                <div class="container">
                <div>
                <!-- Lien pour ouvrir la modal -->
                <a class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#addfor">
                <button  class="bi bi-file-earmark-plus" type="button" id="add-education">Ajouter une formation</button>
                </a>
            </div>

    <!-- Modal -->
    <div class="modal fade" id="addfor" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajouter une formation</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form method="post" action="actions/addformation.php" class="row g-3">
                <div class="col-md-6">
                <label for="school" class="form-label">Nom de l'école:</label>
                <input type="text" id="school" name="school" class="form-control" autocomplete="off" required>
                </div>
                <div class="col-md-6">
                <label for="degree" class="form-label">Diplôme obtenu:</label>
                <input type="text" id="degree" name="degree" class="form-control" autocomplete="off" required>
                </div>
                <div class="col-12">
                <label for="start-year" class="form-label">Année de début:</label>
                <input type="date" id="start-year" name="start_year" class="form-control" autocomplete="off" required>
                </div>
                <div class="col-12">
                <label for="end-year" class="form-label">Année de fin:</label>
                <input type="date" id="end-year" name="end_year" class="form-control" autocomplete="off" required>
                </div>
                <div class="col-md-6">
                <label for="field-of-study" class="form-label">Domaine d'étude:</label>
                <input type="text" id="field-of-study" name="field" class="form-control" autocomplete="off" required>
                </div>
                        <button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
                
</div>

            <!-- Section: Hobbies -->
            <div class="form-section">
                <h2>Hobbies</h2>
                <div class="form-row">
                    <label for="hobbies">Entrez vos hobbies, séparées par une virgule:</label>
                    <input type="text" id="hobbies" name="hobbies" autocomplete="off">
                </div>
            </div>

            <!-- Bouton de soumission du formulaire -->
            <button type="submit" id="submit-button" name="submit">Générer mon CV</button>
        </form>
    </div>
    <!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
