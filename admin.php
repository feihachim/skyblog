<?php 
session_start();
if(!$_SESSION['mdp']){
    header('Location: connexion.php');
}
?>    

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
    </head>
    <body>
        <a href="utilisateurs.php">Afficher tous les Utilisateurs</a>
        <a href="articlePost.php">Publier un nouvel article</a>
        
        
    </body>
    </html>