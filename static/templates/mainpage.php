<?php 
    include "../../server/mainpage.php";

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
            <form name="data" action="biodata.php" method="post">
            <table>
               <th>Information personnel</th>
               <tr>
                <td>Nom:</td>
                <td><input type="text" name="txtNom" autocomplete="off" required>
                </td>
               </tr>

               <tr>
                <td>Prénom:</td>
                <td><input type="text" name="txtPrenom" autocomplete="off" required>
                </td>
               </tr>

               <tr>
                <td>Mail:</td>
                <td><input type="text" name="txtmail" autocomplete="off" required>
                </td>
               </tr>

               <tr>
                <td>Numéro:</td>
                <td><input type="text" name="txtnum" autocomplete="off" required>
                </td>
               </tr>
               <tr>

               <tr>
                <td>Adresse:</td>
                <td><input type="text" name="txtad" autocomplete="off" required>
                </td>
               </tr>
               <tr>
                <td><input type="submit" name="submit"></td>
               </tr>
            </table>
            </form>
        </div>
    </body>
</html>