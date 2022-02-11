<?php
require 'configuration/database.php';

$getProfiles = $bdd->prepare("SELECT id,pseudo FROM utilisateurs WHERE id!=?");
$getProfiles->execute([$_SESSION['id']]);

$usersInfo = $getProfiles->fetchAll(PDO::FETCH_ASSOC);
