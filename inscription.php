<?php
require 'configuration/utilisateurs/inscriptionAction.php';
$title = "Inscription";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
</head>

<body>
    <?php include 'includes/navbar.php'; ?>
    <main>
        <section id="acces">
            <div class="inscription">

                <h1>Inscription</h1> <br>
                <hr> <br>

                <form action="" method="post">

                    <label for="pseudo">Pseudo</label>
                    <input type="text" name="pseudo" placeholder="Votre pseudo"><br>
                    <label for="mdp">Mot de passe</label>
                    <input type="password" name="mdp" placeholder="Votre Mot de passe"><br>
                    <label for="mdp2">Confirmation mot de passe</label>
                    <input type="password" name="mdp2" placeholder="Confirmez Votre Mot de passe "><br>


                    <button type="submit" name="inscrire">M'inscrire</button>
                    <p>
                        <?php if (isset($errorMsg)) : ?>
                            <?= $errorMsg; ?>
                        <?php elseif (isset($successMsg)) : ?>
                            <?= $successMsg; ?>
                        <?php endif; ?>
                    </p>
                </form>

            </div>
        </section>
        <section id="carousel">
            <div id="container">
                <img src="assets/images/img/gauche.png" id="left" height="50px">
                <img src="assets/images/img/droite.png" id="right" height="50px">
            </div>
        </section>
    </main>
    <footer>
        <div>Politique de Confidentialité</div>
        <div>CopyRights☺</div>
        <div> Dev 2022</div>
    </footer>
    <script src="assets/js/app.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>

</html>