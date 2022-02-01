<?php

require('configuration/database.php');

if (isset($_POST['inscrire'])){

if(!empty($_POST['pseudo'])&&!empty($_POST['pseudo2'] && !empty($_POST['mdp']))&&!empty($_POST['mdp2']) ){



}

else{

    echo $erreur="Veuillez Remplir tous les champs ...";
}


}