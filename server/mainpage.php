<?php
session_start();
if (!$_SESSION['password']){
    header('Location: connexion.php');
}
echo $_SESSION['username'];

?>

