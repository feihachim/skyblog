<?php
require 'configuration/database.php';

$getDataNumbers = $bdd->prepare("SELECT (SELECT COUNT(*) FROM articles) AS nb_articles,(SELECT COUNT(*) FROM utilisateurs) AS nb_utilisateurs,(SELECT COUNT(*) FROM commentaires) AS nb_total_commentaires");
$getDataNumbers->execute();

$dataNumbers = $getDataNumbers->fetch(PDO::FETCH_ASSOC);
