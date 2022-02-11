<?php 
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_admin;', 'root', '');
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $getid = $_GET['id'];
    $infoUsers = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
    $infoUsers->execute(array($getid));
    if ($infoUsers->RowCount()>0){
        $bannirUser = $bdd->prepare('DELETE FROM membres WHERE id=?');
        $bannirUser->execute(array($getid));

        header('Location: utilisateurs.php');

    }else{
        echo "Aucun utilisateur n'a été trouvé";
    }
        }else{
        echo "Identifiant non récupéré";
    }

?>