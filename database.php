<?php
try{
    session_start();
    $bdd = new PDO('mysql:host=localhost;dbname=blog;','root','');

    
}

catch(Exception $e){
die("une erreur s'est produite :". $e->getMessage());

}