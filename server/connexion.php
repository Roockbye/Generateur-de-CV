<?php
    session_start();
    //check if the user has clicked on submit button
    if(isset($_POST['submit'])){
        echo "ok";
    // now check the user ID and psw
        if(true){
            $_SESSION['username']= $_POST['username'];
            $_SESSION['email']= $_POST['email'];
            $_SESSION['password'] = true;
            echo "test222";
            //URL Redirection
            header("Location: ../templates/mainpage.php");
        }
        else {
        //URL Redirection
            //header("location:../static/templates/connexion.php");
        echo "<p style='color:Red;'> Invalid Username, Mail or Password";
        }
        
    }
?>