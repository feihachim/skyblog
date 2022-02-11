<?php

require 'configuration/database.php';

$profilId = intval($_GET['id'] ?? $_SESSION['id']);

if ($profilId > 0)
{
    $getUser = $bdd->prepare("SELECT * FROM utilisateurs WHERE id=?");
    $getUser->execute([$profilId]);

    if ($getUser->rowCount() > 0)
    {
        $userProfile = $getUser->fetch(PDO::FETCH_ASSOC);
    }
    else
    {
        $errorMsg = "Ce blogger n'existe pas";
    }
}
else
{
    $errorMsg = "Ce blogger n'existe pas...";
}
