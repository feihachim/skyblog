<?php
require 'configuration/database.php';

$articleId = intval($_GET['id']);

if ($articleId > 0)
{
    $getArticle = $bdd->prepare("SELECT articles.id,articles.titre,articles.contenu,articles.urlPhoto,DATE_FORMAT(articles.date_creation,\"%d/%m/%Y\") AS date_creation ,articles.utilisateur_id,utilisateurs.pseudo FROM articles LEFT JOIN utilisateurs ON articles.utilisateur_id=utilisateurs.id WHERE articles.id=?");
    $getArticle->execute([$articleId]);

    if ($getArticle->rowCount() > 0)
    {
        $article = $getArticle->fetch(PDO::FETCH_ASSOC);
        $getComments = $bdd->prepare("SELECT commentaires.id,commentaires.contenu,DATE_FORMAT(commentaires.date_creation,\"%d/%m/%Y\") AS date_creation,commentaires.utilisateur_id,utilisateurs.pseudo FROM commentaires LEFT JOIN utilisateurs ON commentaires.utilisateur_id=utilisateurs.id WHERE commentaires.article_id=? ORDER BY date_creation");
        $getComments->execute([$articleId]);

        if ($getComments->rowCount() > 0)
        {
            $comments = $getComments->fetchAll(PDO::FETCH_ASSOC);
            $getComment = $bdd->prepare("SELECT commentaires.id AS comment_id,commentaires.contenu FROM commentaires LEFT JOIN utilisateurs ON commentaires.utilisateur_id=utilisateurs.id WHERE commentaires.utilisateur_id=? AND commentaires.article_id=?");
            if (isset($_SESSION['id']))
            {
                $getComment->execute([$_SESSION['id'], $articleId]);

                if ($getComment->rowCount() > 0)
                {
                    $userComment = $getComment->fetch(PDO::FETCH_ASSOC);
                }
            }
        }
        else
        {
            $comments = false;
        }
    }
    else
    {
        $errorMsg = "Cet article n'existe pas...";
    }
}
else
{
    $errorMsg = "Cet article n'existe pas...";
}
