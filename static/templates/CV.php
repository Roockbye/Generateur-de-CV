<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../css/CV.css">
    <title>Mon CV</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="name"><?= "$nom $prenom"; ?></div>
            <div class="title"><?= "$titre"; ?></div>
        </div>
        <div class="section">
            <h2>À propos de moi</h2>
            <p><?= "$resume"; ?></p>
        </div>
        <div class="section">
            <h2>Expérience professionnelle</h2>
            <ul>
                <li><?= "$company, $poste, $date_debut, $date_fin, $tache"; ?></li>
            </ul>
        </div>
        <div class="section">
            <h2>Compétences</h2>
            <ul>
                <li><?= "$competences"; ?></li>
            </ul>
        </div>
        <div class="section">
            <h2>Formation</h2>
            <ul>
                <li><?= "$ecole, $diplome, $annee_debut, $annee_fin, $domaine"; ?></li>
            </ul>
        </div>
        <div class="section">
            <h2>Hobbies</h2>
            <ul>
                <li><?= "$hobbies"; ?></li>
            </ul>
        </div>
        <div class="footer">
            <p>Contact : <?= "$mail"; ?> | Téléphone : <?= "$numero"; ?> | Adresse : <?= "$adresse"; ?></p>
        </div>
    </div>
</body>
</html>