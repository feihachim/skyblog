<?php require 'configuration/utilisateurs/connexionAction.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php'; ?>

<body>
    <?php include 'includes/navbar.php'; ?>
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
                    <p>
                        <?php if (isset($errorMsg))
                        {
                            echo $errorMsg;
                        }
                        elseif (isset($successMsg))
                        {
                            echo $successMsg;
                        } ?>
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

    <!--<script src="assets/js/app.js"></script>-->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</body>

</html>