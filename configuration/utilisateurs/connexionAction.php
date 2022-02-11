<?php

require 'configuration/database.php';

if (isset($_POST['connecter']))
{
    if (!empty($_POST['pseudo']) && !empty($_POST['mdp']))
    {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = htmlspecialchars($_POST['mdp']);

        $getUser = $bdd->prepare("SELECT * FROM utilisateurs WHERE pseudo=?");
        $getUser->execute([$pseudo]);

        if ($getUser->rowCount() > 0)
        {
            $userInfos = $getUser->fetch(PDO::FETCH_ASSOC);
            if (password_verify($mdp, $userInfos['mdp']))
            {
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $userInfos['id'];
                $_SESSION['pseudo'] = $userInfos['pseudo'];
                $_SESSION['admin'] = filter_var($userInfos['admin'], FILTER_VALIDATE_BOOLEAN);
                if ($_SESSION['admin'] == true)
                {
                    header('Location: index.php?action=admin');
                }
                else
                {
                    header('Location: index.php');
                }
            }
            else
            {
                $errorMsg = "Le mot de passe n'est pas correct...";
            }
        }
        else
        {
            $errorMsg = "Ce pseudo n'existe pas dans ce site";
        }
    }
    else
    {
        $errorMsg = "Tous les champs ne sont pas complétés...";
    }
}
