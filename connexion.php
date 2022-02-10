<?php
session_start();
if(isset($_POST['confirmer'])){
    if(!empty($_POST['identifiant']) AND !empty($_POST['mdp'])){
        $identifiant_par_defaut ="admin";
        $mdp_par_defaut ="0000";

        $identifiant_saisi = htmlspecialchars($_POST['identifiant']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);

        if($identifiant_saisi == $identifiant_par_defaut AND $mdp_saisi == $mdp_par_defaut){
            $_SESSION["mdp"] = $mdp_saisi;
            header('Location: Admin.php ');


        }else{
            echo "Mot de passe ou Identifiant incorrect ";
        }
        
    }else{
        echo "Veuillez completer le formulaire";
    }
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Administrateur</title>
</head>
<body>
<form method="POST" action="" align="center">
    <input type="text" name="identifiant" autocomplete="off"><br>
    <input type="password" name="mdp">
    <br><br>
    <input type="submit" name="confirmer">   
</form>
    
</body>
</html>