<?php
require 'configuration/database.php';

$bloggerId = intval($_GET['id']);

if ($bloggerId > 0)
{
    $getArticlesByBlogger = $bdd->prepare("SELECT articles.id,articles.titre FROM articles LEFT JOIN utilisateurs ON articles.utilisateur_id=utilisateurs.id WHERE articles.utilisateur_id=?");
    $getArticlesByBlogger->execute([$bloggerId]);

    if ($getArticlesByBlogger->rowCount() > 0)
    {
        $articles = $getArticlesByBlogger->fetchAll(PDO::FETCH_ASSOC);
    }
    else
    {
        $errorMsg = "Ce blogger n'a pas d'articles...";
    }
}
else
{
    $errorMsg = "Ce blogger n'existe pas...";
}
