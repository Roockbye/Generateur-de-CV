<?php
    session_start();
    //check if the user has clicked on submit button
    if(isset($_POST['submit'])){
    // now check the user ID and psw
        if($_POST['uname']=="Melanie" && $_POST['psw']=="azerty"){
            $_SESSION['username']= $_POST['uname'];
            $_SESSION['auth'] = true;

            //URL Redirection
            header("location:mainpage.php");
        }
        else {
        //URL Redirection
            header("location:connexion.html");
        echo "<p style='color:Red;'> Invalid Username or Password";
        }
        
    }
?>