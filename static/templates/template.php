<?php
    include "../../server/CV.php";
    include "../../server/mainpage.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Realisation de CV</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/template.css" />
</head>
<body>
    <main>
    
       <header>
                <div class="photo">
                    <img src="../images/01.png" width="100%" height="100%" alt="">
                </div>
              <div class="des">
                    <h3><?= $nom . ' ' . $prenom; ?></h3>
                    <p class="post"><?= "$titre"; ?></p>
                </div>
                <div class="right">
                        <p><img src="../images/mail.png" class="info"><?= "$mail"; ?></p>
                        <p><img src="../images/maps.png" class="info"><?= "$adresse"; ?></p>
                        <p><img src="../images/tele.png" class="info"><?= "$numero"; ?></p>
                </div> 
       </header>


<section class="section-left">
    <h4>À propos de moi</h4>
    <hr class="light">
     <div class="atouts">
         <div><?= "$resume"; ?></div>
     </div>

     <h4>Diplômes et Formations</h4>
    <hr class="light">
       <div class="div">
           <div><b> <?= "$degree"; ?>
           </b><strong><?= "$school";?></strong> <?= "$field"; ?> <br><?="$start_year, $end_year";?>
           </div>
           <br>
       </div>

    <h4>Expériences professionnelles</h4>
     <hr class="light">
        <div class="div">
          <p><b><?="$position";?></b> <strong><?="$company";?></strong><br>
          <?="$start_date, $end_date"; ?><br>
            <?="$description";?>.
          </p>
        </div>
</section>

<section class="section-right">
    <h4>Competences</h4>
    <hr class="light">
      <div class="skls">

                <div class="po">
                    <p><?= "$skills"; ?></p>
                    <div class="cool">
                        <div style="width:80%" class="inner"></div>
                    </div>
                </div>
            </div>

    <h4>Centres d'intérêt</h4>
     <hr class="light">
     <div class="interet">
          <div><b><?= "$hobbies"; ?></b></div>
     </div>
</section>


        <div class="srkl">

        </div>
     <hr class="light">
     
    </main>
    <a href="download_cv.php">Télécharger le CV</a>
</body>

</html>
