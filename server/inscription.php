<?php
$bdd = new PDO('mysql:host=localhost;dbname=db_cv;charset=utf8;','root',"");
if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $check = $_POST['check-psw'];
    $insert = $bdd->prepare('INSERT INTO users(firstname, lastname, username,
    phone, email, password) VALUE(?, ?, ?, ?, ?, ?)');
    $insert->execute(array($firstname, $lastname, $username, $phone, $email, $password));
}
        
?>
