<?php
require 'configuration/database.php';

$commentId = intval($_GET['id']);

if ($commentId > 0)
{
    $getComment = $bdd->prepare("SELECT article_id FROM commentaires WHERE id=?");
    $getComment->execute([$commentId]);

    if ($getComment->rowCount() > 0)
    {
        $comment = $getComment->fetch(PDO::FETCH_ASSOC);
        $articleId = $comment['article_id'];

        $deleteComment = $bdd->prepare("DELETE FROM commentaires WHERE id=?");
        $deleteComment->execute([$commentId]);

        header('Location: index.php?action=article&id=' . $articleId);
    }
    else
    {
        header('Location: index.php');
    }
}
else
{
    header('Location: index.php');
}
