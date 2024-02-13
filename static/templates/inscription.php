<?php
    include "../../server/inscription.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Inscription page</title>
    <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/inscription.css">
  </head>
  <body>
    <div class="main">
      <div class="container a-container" id="a-container">
          <form method="post" action ="">
            <h2 class="switch__title title">Bienvenue  !</h2>
            <input class="form__input" type="text" name="firstname" autocomplete="off" placeholder="Prénom">
            <input class="form__input" type="text" name="lastname" autocomplete="off" placeholder="Nom">
            <input class="form__input" type="text" name="username" autocomplete="off" placeholder="Nom d'utilisateur">
            <input class="form__input" type="text" name="phone" autocomplete="off" placeholder="Telephone">
            <input class="form__input" type="text" name="email" autocomplete="off" placeholder="Email">
            <input class="form__input" type="password" name="password" autocomplete="off" placeholder="Mot de Passe">
            <input class="form__input" type="password" name="check-psw" autocomplete="off" placeholder="Confirmer mot de passe">
            <button class="switch__button button switch-btn" type="submit" name='submit'>S'INSCRIRE</button>
        </form>
      </div>
      </div>
    </div>
  </body>
</html>
