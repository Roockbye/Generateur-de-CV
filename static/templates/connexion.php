<?php 
    include "../../server/connexion.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Connexion</title>
    <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/connexion.css">
  </head>
  <body>
    <div class="main">
      <div class="container a-container" id="a-container">
          <form action ="" method="post">
          <h2 class="form_title title">De retour !</h2>
          <input class="form__input" type="text" name="username" autocomplete="off" placeholder="Username">
          <input class="form__input" type="text" name="email" autocomplete="off" placeholder="Email">
          <input class="form__input" type="password" name="password" autocomplete="off" placeholder="Mot de Passe">
          <div>
          <button class="form__button button submit" name="submit">SE CONNECTER</button>
          </div>
        </form>
      </div>
      <div class="container b-container" id="b-container">
      </div>
      <div class="switch" id="switch-cnt">
        <div class="switch__circle"></div>
        <div class="switch__circle switch__circle--t"></div>
        <div class="switch__container" id="switch-c1">
        <form action ="post" href="../../server/inscription.php">
          <h2 class="switch__title title">Bienvenue  !</h2>
          <button class="switch__button button switch-btn" name="inscription">S'INSCRIRE</button>
        </form>
        </div>
      </div>
    </div>
    <script  src="./connexion.js"></script>
  </body>
</html>