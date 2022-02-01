
<?php

include('configuration/inscription.php')

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

</head>

<body>
    <header>
        <div class="logo">
            <img src="img/header2.png" alt="Logo Blog" width="100%" height="150px">
        </div>
        <div class="nav">

            <div class="search"> <input type="search" placeholder="Rechercher.."
                    aria-label="Search through site content">
                <ion-icon name="search" id="search"></ion-icon>
            </div>

            <div class="home">
                <ion-icon name="home"> </ion-icon> <br><span>Home</span>
            </div>
            <br>
            <div class="chat">
                <ion-icon name="chatboxes"></ion-icon> <br> <span>Chat</span>
            </div>
            <div class="login"> <Button>Connexion</Button></div>
            <div class="register"> <button>Inscription</button></div>
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
                    <input type="pseudo" name="pseudo" id="pseudo"><br>
                    <label for="mdp">Mot de passe</label>
                    <input type="password" name="mdp" id="mdp"><br>
                    <button type="submit" name="connecter">Me Connecter</button>




                </form>
            </div>
            <div class="inscription">

                <h1>Inscription</h1> <br>
                <hr> <br>

                <form action="" method="post">

                    <label for="pseudo">Pseudo</label>
                    <input type="pseudo" name="pseudo" id="pseudo" placeholder="Votre pseudo"><br>
                    <label for="pseudo2">Confirmation</label>
                    <input type="pseudo" name="pseudo2" id="pseudo2" placeholder="Confirmez Votre pseudo"> <br>
                    <label for="mdp">Mot de passe</label>
                    <input type="password" name="mdp" id="mdp" placeholder="Votre Mot de passe"><br>
                    <label for="mdp2">Confirmation</label>
                    <input type="password" name="mdp2" id="mdp2" placeholder="Confirmez Votre Mot de passe "><br>


                    <button type="submit" name="inscrire">M'inscrire</button>

                    <?php  if(isset($erreur)){

                        echo"<p>".$erreur."</p>";
                    }
                    ?>

                </form>

            </div>


        </section>


        <section id="carousel">

            <div id="container">


                <img src="img/gauche.png" id="left" height="50px">
                <img src="img/droite.png" id="right" height="50px">
            </div>











        </section>






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