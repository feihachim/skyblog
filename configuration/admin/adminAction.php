<?php
require 'configuration/database.php';

$getDataNumbers = $bdd->prepare("SELECT (SELECT COUNT(*) FROM articles) AS nb_articles,(SELECT COUNT(*) FROM utilisateurs WHERE admin=0) AS nb_utilisateurs");
$getDataNumbers->execute();

$dataNumbers = $getDataNumbers->fetch(PDO::FETCH_ASSOC);
