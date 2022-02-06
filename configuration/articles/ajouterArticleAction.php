<?php
require 'configuration/database.php';

if (isset($_POST['publierArticle']))
{
    if (!empty($_POST['title']) && !empty($_POST['content']))
    {
        $titre = htmlspecialchars($_POST['title']);
        $contenu = nl2br(htmlspecialchars($_POST['content']));
        $date_creation = date_create()->format('Y-m-d H:i:s');
        $utilisateur_id = $_SESSION['id'];

        $insertArticle = $bdd->prepare("INSERT INTO articles (titre,contenu,urlPhoto,date_creation,utilisateur_id) VALUES (?,?,?,?,?)");
        $insertArticle->execute([$titre, $contenu, NULL, $date_creation, $utilisateur_id]);

        if ($insertArticle->rowCount() > 0)
        {
            header('Location: mes-articles.php');
        }
        else
        {
            $errorMsg = "Erreur lors de l'ajout de l'article...";
        }
    }
    else
    {
        $errorMsg = "Veuillez remplir tousles champs..";
    }
}
