<?php 
    include "../../server/mainpage.php";

?>

<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link type="text/css" ref="stylesheet" href="../css/mainpage.css">
    </head>
    <body>
        <div class="header">
            <h1>CV Maker</h1>
            <p> Responsive layout</p>
            <a href="../../server/deconnexion.php"><button>Se déconnecter</button></a>
        </div>

        <div class="topnav">
            <a href="#">Home</a>
            <a href="#">Modèles</a>
            <a href="#">Mes CVS</a>
            <a href="" class="menuRight" Style="float:right"> About</a>
        </div>
        <div class="row">
            <div class="leftcolumn">
                <div class="card">
                    <h2> My first heading</h2>
                    <h5>description</h5>
                    <div class="cardImg" style="height: 200px"><img src=""> Image</div>
                    <p>Some text</p>
                    <p>More textttttttttttt</p>
                </div>
            </div>
            <div class="rightcolumn">
                <div class="card">
                    <h2>About Me</h2>
                    <div class="cardimg"><img src="">Image</div>
                    <p>Some text</p>
                </div>
                <div class="card">
                    <h2>Post</h2>
                    <div class="cardimg"><img src="">Image</div>
                    <p>Some text</p>
                </div>
            </div>
        </div>
        <div class="fotter">
            <h2> Fotter Content</h2>
        </div>
    </body>
</html>