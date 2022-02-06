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