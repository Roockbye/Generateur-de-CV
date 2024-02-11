<?php
include "../lib/TCPDF-main/tcpdf.php";

// Créer une instance de la classe TCPDF
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Définir les informations du document PDF
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Votre nom');
$pdf->SetTitle('CV');
$pdf->SetSubject('CV au format PDF');
$pdf->SetKeywords('CV, PDF, génération');

// Définir les marges
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// Définir le mode d'affichage et l'échelle
$pdf->SetPrintHeader(false);
$pdf->SetPrintFooter(false);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->SetFont('helvetica', '', 10);

// Ajouter une page au document PDF
$pdf->AddPage();

$bdd = new PDO('mysql:host=localhost;dbname=db_cv;charset=utf8;','root',"");
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

// Générer le contenu du CV au format HTML
$content = "
    <header>
        <h3>$nom $prenom</h3>
        <p class='post'>$titre</p>
        <p><img src='../images/mail.png' class='info'>$mail</p>
        <p><img src='../images/maps.png' class='info'>$adresse</p>
        <p><img src='../images/tele.png' class='info'>$numero</p>
    </header>
    <section>
        <h4>À propos de moi</h4>
        <p>$resume</p>
        <h4>Diplômes et Formations</h4>
        <p><b>$degree</b> <strong>$school</strong> $field ($start_year - $end_year)</p>
        <h4>Expériences professionnelles</h4>
        <p><b>$position</b> <strong>$company</strong> ($start_date - $end_date)<br>$description</p>
        <h4>Compétences</h4>
        <p>$skills</p>
        <h4>Centres d'intérêt</h4>
        <p><b>$hobbies</b></p>
    </section>
";

// Ajouter le contenu au document PDF
$pdf->writeHTML($content, true, false, true, false, '');

// Nom du fichier PDF téléchargé
$filename = 'CV.pdf';

// Télécharger le fichier PDF
$pdf->Output($filename, 'D');

?>
