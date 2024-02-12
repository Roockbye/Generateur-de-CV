<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=db_cv;charset=utf8', 'root', '');
} catch(PDOException $e) {
    die('Erreur connexion : '.$e->getMessage());
}

if(isset($_FILES['photo'])){
    $tmpName = $_FILES['photo']['tmp_name'];
    $photo = $_FILES['photo']['name'];
    $size = $_FILES['photo']['size'];
    $error = $_FILES['photo']['error'];

    $tabExtension = explode('.', $photo);
    $extension = strtolower(end($tabExtension));
    $extensions = ['jpg', 'png', 'jpeg', 'gif'];
    
    if(in_array($extension, $extensions)){
        move_uploaded_file($tmpName, 'upload/'.$photo);

        $req = $db->prepare('INSERT INTO photo (photo) VALUES(?)');
        $req->execute([$photo]);

        echo "Image enregistrée";
        echo "<script>setTimeout(function(){ window.location.href = '../static/templates/template.php'; }, 2000);</script>";
    } else {
        echo "Mauvaise extension";
    }
}
?>
