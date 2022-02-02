<?php require 'configuration/utilisateurs/inscriptionAction.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

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
    <!--<script src="app.js"></script>-->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>

</html>