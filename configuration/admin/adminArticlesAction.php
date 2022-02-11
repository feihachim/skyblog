<?php
require 'configuration/database.php';

$getArticles = $bdd->prepare("SELECT id,titre FROM articles");
$getArticles->execute();

$articles = $getArticles->fetchAll(PDO::FETCH_ASSOC);
