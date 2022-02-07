
<?php

require("configuration/database.php");

if (isset($_POST['inscrire'])) {

  if (!empty($_POST['pseudo']) && !empty($_POST['pseudo2'] && !empty($_POST['mdp'])) && !empty($_POST['mdp2'])) {

    $pseudoUser = htmlspecialchars($_POST['pseudo']);
    $pseudoUser2 = htmlspecialchars($_POST['pseudo2']);
    $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
    $mdp2 = password_hash($_POST['mdp2'], PASSWORD_DEFAULT);

    if ($pseudoUser === $pseudoUser2 || $mdp === $mdp2) {

      $checkUser = $bdd->prepare(' SELECT * FROM utilisateurs WHERE pseudo = ?');
      $checkUser->execute(array($pseudoUser));

      if ($checkUser->rowCount() === 0) {
        $insertUser=$bdd->prepare('INSERT INTO utilisateurs( pseudo,pseudo2,mdp,mdp2) VALUES (?,?,?,?)');
        $insertUser->execute(array($pseudoUser,$pseudoUser2,$mdp,$mdp2));

        $msg="Vous etes bien inscris,c'est parti ";

        header('location:connexion.php');

      } else {
        $erreur = "Ce Pseudo est déjà Utilisé veuillez choisir un autre... ";
      }
    } else {

      $erreur = "Vos Pseudo Ou Mots de passe ne sont pas identiques...";
    }
  } else {

    $erreur = "Veuillez Remplir tous les champs ...";
  }
}

?>