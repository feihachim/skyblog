<?php

require('configuration/database.php');

if (isset($_POST['inscrire']))
{

    if (!empty($_POST['pseudo']) && !empty($_POST['mdp']) && !empty($_POST['mdp2']))
    {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = htmlspecialchars($_POST['mdp']);
        $mdp2 = htmlspecialchars($_POST['mdp2']);

        $checkIfPseudoExists = $bdd->prepare("SELECT * FROM utilisateurs WHERE pseudo=?");
        $checkIfPseudoExists->execute([$pseudo]);

        if ($checkIfPseudoExists->rowCount() == 0)
        {
            if ($mdp === $mdp2)
            {
                $mdp = password_hash($mdp, PASSWORD_DEFAULT);
                $urlPhoto = "blank-profile-picture-g57d8d01f3_640.png";

                $insertUser = $bdd->prepare("INSERT INTO utilisateurs (pseudo,mdp,urlPhoto) VALUES(?,?,?)");
                $req = $insertUser->execute([$pseudo, $mdp, $urlPhoto]);
                if ($req)
                {
                    $getUser = $bdd->prepare("SELECT * FROM utilisateurs WHERE pseudo=?");
                    $getUser->execute([$pseudo]);

                    $userInfos = $getUser->fetch(PDO::FETCH_ASSOC);
                    $_SESSION['auth'] = true;
                    $_SESSION['id'] = $userInfos['id'];
                    $_SESSION['pseudo'] = $userInfos['pseudo'];
                    $_SESSION['admin'] = filter_var($userInfos['admin'], FILTER_VALIDATE_BOOLEAN);
                    header('Location: index.php');
                    //$successMsg = "Vous avez bien été enregistré!";
                }
                else
                {
                    $errorMsg = "Erreur lors de l'enregistrement";
                }
            }
            else
            {
                $errorMsg = "Les mots de passe ne sont pas identiques...";
            }
        }
        else
        {
            $errorMsg = "Ce pseudo existe déjà dans le site...";
        }
    }

    else
    {

        echo $errorMsg = "Veuillez remplir tous les champs ...";
    }
}
