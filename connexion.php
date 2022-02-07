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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

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
         
            <div class="register"><a href="inscription.php"> <button>Inscription</button></a></div>
            <div class="burger">
                <ion-icon name="menu"></ion-icon>
            </div>
            <div class="close">
                <ion-icon name="close"></ion-icon>
            </div>



 


        </div>

    </header>

    <main>
        <section id="acces">

            <div class="connexion">
                <h1>Connexion</h1> <br>
                <hr><br>
                <form action="" method="post">

                    <label for="pseudo">Pseudo</label>
                    <input type="epseudo" name="pseudo" id="pseudo"><br>
                    <label for="mdp">Mot de passe</label>
                    <input type="password" name="mdp" id="mdp"><br>
                   
                    <button class="btn btn-primary" type="submit" name="submit">Me connecter</button> 

                    <?php if (isset($erreur)) {
                        echo "<p>" . $erreur . "</P>";
                    }
                    ?>





                </form>
            </div>





    </main>






    <footer>

        <div>Politique de Confidentialité</div>
        <div>CopyRights☺</div>
        <div> Dev 2022</div>

    </footer>

    <script src="app.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>

</html>