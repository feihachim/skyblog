<?php
require 'configuration/database.php';

if (isset($_GET['id']))
{
    $articleId = intval($_GET['id']);

    if ($articleId > 0)
    {
        $getArticle = $bdd->prepare("SELECT urlPhoto FROM articles WHERE id=?");
        $getArticle->execute([$articleId]);

        if ($getArticle->rowCount() > 0)
        {
            $article = $getArticle->fetch(PDO::FETCH_ASSOC);
            $urlPhoto = ARTICLES_IMAGES_PATH . $article['urlPhoto'];
            $deleteArticle = $bdd->prepare("DELETE FROM articles WHERE id=?");
            $deleteArticle->execute([$articleId]);
            unlink($urlPhoto);
        }

        header('Location: index.php?action=mes-articles');
    }
}
