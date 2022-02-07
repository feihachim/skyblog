<?php

require('configuration/database.php');


if (isset($_POST['submit'])) {


    if (!empty($_POST['pseudo']) && !empty($_POST['mdp'])) {

        $pseudoUser = htmlspecialchars($_POST['pseudo']);

        $mdp =htmlspecialchars($_POST['mdp']);

$checkUser=$bdd->prepare('SELECT * FROM utilisateurs WHERE pseudo=?');
$checkUser->execute(array($pseudoUser));



if($checkUser->rowCount() > 0){

    $userInfo = $checkUser->fetch();

if(password_verify($mdp,$userInfo['mdp'])){

    $_SESSION['auth'] =true;
    $_SESSION['id']=$userInfo['id'];
    $_SESSION['pseudo']=$userInfo['pseudo'];

    header('Location:userCmd.php');


}

else{

    $erreur="Votre Mot de passe est incorrect!";
}

}
else{

    $erreur="Votre Pseudo est incorrect";
}


    } else {

        $erreur = "Veuillez Remplir les Champs!";
    }
}
?>