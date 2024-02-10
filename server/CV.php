<?php

session_start();

$db = new PDO('mysql:host=localhost;dbname=db_cv;charset=utf8;','root',"");
$fn= new Functions();
if ($_POST){
    echo "<pre>";
    print_r($_POST);

    if ($_POST['lastname'] && $_POST['firstname'] && $_POST['titre'] && $_POST['email'] && $_POST['phone'] &&
    $_POST['address'] && $_POST['apropos'] && $_POST['hobbies']){

        $query = $db->prepare('INSERT INTO cv (lastname, firstname, titre, email, phone, address, apropos, hobbies)
        VALUES (?,?,?,?,?,?,?,?)');
        $insert->execute(array($firstname, $lastname, $titre, $phone, $email, $adresse, $resume, $hobbies));
    }
/*
        // Affectation des valeurs avec liaison des paramètres
        $stmt->bindValue(':lastname', $_POST['lastname']);
        $stmt->bindValue(':firstname', $_POST['firstname']);
        $stmt->bindValue(':titre', $_POST['titre']);
        $stmt->bindValue(':email', $_POST['email']);
        $stmt->bindValue(':phone', $_POST['phone']);
        $stmt->bindValue(':address', $_POST['address']);
        $stmt->bindValue(':apropos', $_POST['apropos']);
        $stmt->bindValue(':hobbies', $_POST['hobbies']);
        $stmt->bindValue(':updated', time());
        $stmt->bindValue(':id_user', $fn->Auth()['id']); 

        $auth_data = $fn->Auth();
        if ($auth_data && isset($auth_data['id'])) {
            $stmt->bindValue(':id_user', $auth_data['id']);
        } else {
            // Gestion de l'erreur si l'utilisateur n'est pas authentifié
            $fn->setError("L'utilisateur n'est pas authentifié.");
            $fn->redirect('../static/templates/mainpage.php');
        }*/
    
        try {
            // Redirection après l'insertion réussie
            $fn->setAlert('enregistrement complet');
            $fn->redirect('../static/templates/template.php');
        } catch (Exception $error) {
            // Gestion des erreurs
            $fn->setError($error->getMessage());
            $fn->redirect('../static/templates/mainpage.php');
        }
    }
}

class Functions{

    public function redirect($address){
        header("Location:".$address);
    }

    public function setError($msg){
        $_SESSION['error']=$msg;
    }

    public function setAuth($data){
        $_SESSION['Auth']=$data;
    }

    public function Auth(){
        if(isset($_SESSION['Auth'])){
            return $_SESSION['Auth'];
        }else{
            return false;
        }
    }

    public function error(){
        if(isset($_SESSION['error'])){
            echo "Swal.fire('','".$_SESSION['error']."','error')";
            unset($_SESSION['error']);
        }
    }

    public function setAlert($msg){
        $_SESSION['alert']=$msg;
    }

    public function alert(){
        if(isset($_SESSION['alert'])){
            echo "Swal.fire('','".$_SESSION['alet']."','success')";
            unset($_SESSION['alert']);
        }
    }

    public function setSession($key, $value){
        $_SESSION[$key]=$value;
    }

    public function getSession($key){
        return $_SESSION[$key]??'';
    }

    public function authPage(){
        if(!isset($_SESSION['Auth'])){
            $this->redirect('../static/templates/connexion.php');
        }
    }

    public function nonAuthPage(){
        if(isset($_SESSION['Auth'])){
            $this->redirect('../static/templates/mainpage.php');
        }
    }

    public function randomstring(){
        $string="0123456789abcdefghijklmnopqrstuvwxyz_".time().rand(1111,2222333);
        $string=str_shuffle($string);
        return str_split($string,16);
    }

    
}


?>

