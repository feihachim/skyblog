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
