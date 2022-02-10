<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_admin;', 'root', '');
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
    <title>Utilisateurs</title>
</head>
<body>
    <!-- Afficher tous les utilisateurs -->
    <?php
    $infoUsers = $bdd->query('select * FROM membres');
    while ($user =$infoUsers->fetch()){
        ?>
       <p><?= $user['pseudo']; ?></p>
       <?php
    }
    ?>
    <!-- Fin d'afficher tous les utilisateurs -->
</body>
</html>