<?php
require 'configuration/database.php';

$userId = intval($_SESSION['id']);

$getMyArticles = $bdd->prepare("SELECT articles.id,articles.titre FROM articles LEFT JOIN utilisateurs ON articles.utilisateur_id=utilisateurs.id WHERE articles.utilisateur_id=? ORDER BY articles.date_creation DESC");
$getMyArticles->execute([$userId]);

if ($getMyArticles->rowCount() > 0)
{
    $articles = $getMyArticles->fetchAll(PDO::FETCH_ASSOC);
}
else
{
    $errorMsg = "Il n'y a pas d'articles...";
}
