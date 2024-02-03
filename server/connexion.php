<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=db_cv;charset=utf8;','root',"");

//check if the user has clicked on submit button
if(isset($_POST['submit'])){
    // now check
    if(!empty($_POST['username']) AND !empty($_POST['email']) AND !empty($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        $recupUser = $bdd->prepare('SELECT username, email, password 
        FROM users WHERE username = ? OR password = ? OR email = ?');
        $recupUser->execute(array($username, $password, $email));

        if ($recupUser->rowCount() > 0){
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;

            //URL Redirection
            header("Location: mainpage.php");
            //exit();
        }else{
            echo "Votre mot de passe ou pseudo est incorrecte";
        }
            
    } else {
        //URL Redirection
        echo "<p style='color:Red;'> Veuillez compléter tous les champs";
    }
}
?>
