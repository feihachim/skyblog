<?php
require 'configuration/database.php';

$articleId = intval($_GET['article']);

if ($articleId > 0)
{
    $getArticle = $bdd->prepare("SELECT articles.id,articles.titre,articles.contenu,articles.urlPhoto,DATE_FORMAT(articles.date_creation,\"%d/%m/%Y\") AS date_creation,articles.utilisateur_id,utilisateurs.pseudo FROM articles LEFT JOIN utilisateurs ON articles.utilisateur_id=utilisateurs.id WHERE articles.id=?");
    $getArticle->execute([$articleId]);

    if ($getArticle->rowCount() > 0)
    {
        $article = $getArticle->fetch(PDO::FETCH_ASSOC);

        $getComments = $bdd->prepare("SELECT commentaires.id,commentaires.contenu,DATE_FORMAT(commentaires.date_creation,\"%d/%m/%Y\") AS date_creation,commentaires.utilisateur_id,utilisateurs.pseudo FROM commentaires LEFT JOIN utilisateurs ON commentaires.utilisateur_id=utilisateurs.id WHERE commentaires.article_id=?");
        $getComments->execute([$articleId]);

        if ($getComments->rowCount() > 0)
        {
            $comments = $getComments->fetchAll(PDO::FETCH_ASSOC);
        }
        else
        {
            $comments = false;
        }

        if (isset($_POST['publier']))
        {
            if (!empty($_POST['comment']))
            {
                $newComment = nl2br(htmlspecialchars($_POST['comment']));
                $utilisateur_id = htmlspecialchars($_POST['userId']);

                $insertComment = $bdd->prepare("INSERT INTO commentaires(contenu,date_creation,article_id,utilisateur_id) VALUES(?,NOW(),?,?)");
                $insertComment->execute([$newComment, $articleId, $utilisateur_id]);

                if ($insertComment->rowCount() > 0)
                {
                    header('Location: index.php?action=article&id=' . $articleId);
                }
                else
                {
                    $errorMsgComment = "Erreur lors de l'ajout du commentaire...";
                }
            }
            else
            {
                $errorMsgComment = "Veuillez remplir le champ";
            }
        }
    }
    else
    {
        $errorMsgComment = "Cet article n'existe pas...";
    }
}
else
{
    $errorMsg = "Pas d'article...";
}
