<?php
require 'configuration/database.php';

$commentId = intval($_GET['id']);

if ($commentId > 0)
{
    $getComment = $bdd->prepare("SELECT commentaires.id AS comment_id,commentaires.contenu,DATE_FORMAT(commentaires.date_creation,\"%d/%m/%Y\") AS date_creation,commentaires.article_id,utilisateurs.pseudo FROM commentaires LEFT JOIN utilisateurs ON commentaires.utilisateur_id=utilisateurs.id WHERE commentaires.id=?");
    $getComment->execute([$commentId]);

    if ($getComment->rowCount() > 0)
    {
        $userComment = $getComment->fetch(PDO::FETCH_ASSOC);
        $articleId = $userComment['article_id'];

        $getArticle = $bdd->prepare("SELECT articles.id,articles.titre,articles.contenu,articles.urlPhoto,DATE_FORMAT(articles.date_creation,\"%d/%m/%Y\") AS date_creation,articles.utilisateur_id,utilisateurs.pseudo FROM articles LEFT JOIN utilisateurs ON articles.utilisateur_id=utilisateurs.id WHERE articles.id=?");
        $getArticle->execute([$articleId]);
        $article = $getArticle->fetch(PDO::FETCH_ASSOC);

        $getComments = $bdd->prepare("SELECT commentaires.id,commentaires.contenu,DATE_FORMAT(commentaires.date_creation,\"%d/%m/%Y\") AS date_creation,commentaires.utilisateur_id,utilisateurs.pseudo FROM commentaires LEFT JOIN utilisateurs ON commentaires.utilisateur_id=utilisateurs.id WHERE commentaires.article_id=?");
        $getComments->execute([$articleId]);

        $comments = $getComments->fetchAll(PDO::FETCH_ASSOC);

        if (isset($_POST['publier']))
        {
            if (!empty($_POST['comment']))
            {
                $contenu = nl2br(htmlspecialchars($_POST['comment']));

                $updateComment = $bdd->prepare("UPDATE commentaires SET contenu=? WHERE id=?");
                $updateComment->execute([$contenu, $commentId]);

                if ($updateComment->rowCount() > 0)
                {
                    header('Location: index.php?action=article&id=' . $articleId);
                }
                else
                {
                    $errorMsg = "Erreur lors de la mise à jour du commentaire";
                }
            }
            else
            {
                $errorMsg = "Veuillez remplir le champ...";
            }
        }
    }
    else
    {
        $errorMsg = "Pas de commentaire...";
    }
}
else
{
    $errorMsg = "Ce commentaire n'existe pas...";
}
