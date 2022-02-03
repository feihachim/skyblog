<?php

require 'configuration/database.php';

$getArticles = $bdd->prepare("SELECT articles.id,articles.titre,DATE_FORMAT(articles.date_creation,\"%d/%m/%Y\") AS date_creation,articles.utilisateur_id,utilisateurs.pseudo FROM articles LEFT JOIN utilisateurs ON articles.utilisateur_id=utilisateurs.id  ORDER BY articles.date_creation DESC");
$getArticles->execute();

if ($getArticles->rowCount() > 0)
{
    $listArticles = $getArticles->fetchAll(PDO::FETCH_ASSOC);
}
else
{
    $errorMsg = "Aucun article dans la base de données...";
}
