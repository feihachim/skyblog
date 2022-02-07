<?php 


require('configuration/database.php');

if(isset($_POST['validate'])){

if(!empty($_POST['image']) && !empty($_POST['info'])){

    $imgProfil=htmlspecialchars(($_POST['image']));
    $info=htmlspecialchars(($_POST['info']));



    $insert=$bdd->prepare('INSERT INTO utilisateurs (image,info) VALUES (?,?)');
    $insert->execute(array($imgProfil,$info));



    header('location:profil.php');

  



}


else{


    $erreur = "Vous n'avez pas Modifier Votre Profil !";
}




}