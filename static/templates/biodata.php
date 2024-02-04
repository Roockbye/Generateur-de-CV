<?php 
    include "../../server/mainpage.php";
    include "../../server/biodata.php";

?>

<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link type="text/css" rel="stylesheet" href="../css/mainpage.css">
    </head>
    <body>
        <div class="header">
            <h1>CV Maker</h1>
            <a href="../../server/deconnexion.php"><button>Se déconnecter</button></a>
        </div>

        <div class="nav">
            <a href="#" class="active">Home</a>
            <a href="#">Modèles</a>
            <a href="#">Mes CVS</a>
        </div>
        <div class="bodyArea">
            <h2>Formulaire</h2>
            <form name="data" action="CV.php" method="post">
            <table>
            <th>Parcours:</th>

               <tr>
                <td>Lycée:</td>
                <td><input type="text" name="txtschool" autocomplete="off" required>
                </td>
                <td> <input type="date" name="dataschool"> </td>
               </tr>

               <tr>
                <td>Université:</td>
                <td><input type="text" name="txtuni" autocomplete="off">
                </td>
                <td> <input type="date" name="datauni"> </td>
               </tr>

               <tr>
                <td>Diplome:</td>
                <td><input type="text" name="txtdi" autocomplete="off">
                </td>
                <td> <input type="date" name="datadi"> </td>
               </tr>

               <tr>
                <td>Expérience profesionnel:</td>
                <td><input type="text" name="txtpro" autocomplete="off">
                </td>
                <td> <input type="date" name="datapro"> </td>
               </tr>

               <tr>
                <td>Hobbies:</td>
                <td><input type="text" name="txthobbies" autocomplete="off" required>
                </td>
                <td> <input type="data" name="datahobbies"> </td>
                <td> <input type="data" name="datahobbies"> </td>
                <td> <input type="data" name="datahobbies"> </td>
               </tr>

               <input type="submit" name="submit">
            </table>
            <input type="hidden" name="txtNom" value="<?php echo $nom; ?>">
            <input type="hidden" name="txtPrenom" value="<?php echo $prenom; ?>">
            <input type="hidden" name="txtmail" value="<?php echo $mail; ?>">
            <input type="hidden" name="txtnum" value="<?php echo $numero; ?>">
            <input type="hidden" name="txtad" value="<?php echo $adresse; ?>">
            </form>
        </div>
    </body>
</html>