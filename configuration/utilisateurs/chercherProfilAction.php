<?php
require 'configuration/database.php';

if (!empty($_POST['search-input']))
{
    $searchInput = htmlspecialchars($_POST['search-input']) . "%";

    $getUsers = $bdd->prepare("SELECT id,pseudo FROM utilisateurs WHERE pseudo LIKE ?");
    $getUsers->execute([$searchInput]);

    if ($getUsers->rowCount() > 0)
    {
        $listUsers = $getUsers->fetchAll(PDO::FETCH_ASSOC);
    }
    else
    {
        $listUsers = false;
    }
}
else
{
    $errorMsg = "Veuillez remplir le champ...";
}
