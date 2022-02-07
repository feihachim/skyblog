<?php
require('configuration/connect.php');

?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
        <div class="logo">
            <img src="img/header2.png" alt="Logo Blog" width="100%" height="150px">
        </div>
        <div class="nav">

            <div class="search"> <input type="search" placeholder="Rechercher.." aria-label="Search through site content">
                <ion-icon name="search" id="search"></ion-icon>
            </div>

            <div class="home">
                <a href="index.php">
                    <ion-icon name="home"> </ion-icon> <br><span>Home</span>
                </a>
            </div>
            <br>
            <div class="chat">
                <ion-icon name="chatboxes"></ion-icon> <br> <span>Chat</span>
            </div>
            <div class="login"> <a href="connexion.php"><Button>Connexion</Button></a></div>
            <div class="register"><a href="inscription.php"> <button>Inscription</button></a></div>
            <div class="profil">
                <ion-icon name="person" class="person" ></ion-icon> <br> <?php echo"<span>".$_SESSION['pseudo']."</span>"?> 
            </div>
            
            <div class="burger">
                <ion-icon name="menu"></ion-icon>
            </div>
            <div class="close">
                <ion-icon name="close"></ion-icon>
            </div>






        </div>

    </header>
   

    <main id="user">

    <section class="info">
<img src="" alt="Photo de profil">
 <?= '<h1 class="pseudo">'.$_SESSION['pseudo'].'</h1>'?>

<p>Info User</p>









    </section>





    <section class="article" class="Show">

    <div>
<h1> Titre </h1>
<p>Contenu</p>




    </div>




    </section>




    </main>






    <!-- <footer>

        <div>Politique de Confidentialité</div>
        <div>CopyRights☺</div>
        <div> Dev 2022</div>

    </footer> -->

    <script src="app.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>

</html>