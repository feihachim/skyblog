<?php

require 'configuration/database.php';

$profilId = intval($_GET['id'] ?? $_SESSION['id']);

if ($profilId > 0)
{
    $getUser = $bdd->prepare("SELECT id,pseudo,urlPhoto FROM utilisateurs WHERE id=?");
    $getUser->execute([$profilId]);

    if ($getUser->rowCount() > 0)
    {
        $userProfile = $getUser->fetch(PDO::FETCH_ASSOC);
        $getArticlesByUser = $bdd->prepare("SELECT id,titre FROM articles WHERE utilisateur_id=?");
        $getArticlesByUser->execute([$profilId]);

        if ($getArticlesByUser->rowCount() > 0)
        {
            $articlesByUser = $getArticlesByUser->fetchAll(PDO::FETCH_ASSOC);

            $getCommentsByUser = $bdd->prepare("SELECT commentaires.article_id,articles.titre FROM articles LEFT JOIN commentaires ON articles.id=commentaires.article_id WHERE commentaires.utilisateur_id=?");
            $getCommentsByUser->execute([$profilId]);

            if ($getCommentsByUser->rowCount() > 0)
            {
                $commentsByUser = $getCommentsByUser->fetchAll(PDO::FETCH_ASSOC);
            }
            else
            {
                $commentsByUser = false;
            }
        }
        else
        {
            $articlesByUser = false;
            $commentsByUser = false;
        }
    }
    else
    {
        $errorMsg = "Ce blogger n'existe pas";
    }
}
else
{
    $errorMsg = "Ce blogger n'existe pas...";
}
