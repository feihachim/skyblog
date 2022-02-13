<div class="connexion">
    <h1>Connexion</h1> <br>
    <hr><br>
    <form class="" action="" method="post">
        <div class="mb-3">
            <label for="pseudo">Pseudo</label>
            <input type="pseudo" name="pseudo" id="pseudo">
        </div>
        <br>
        <div class="mb-3">
            <label for="mdp">Mot de passe</label>
            <input type="password" name="mdp" id="mdp">
        </div>
        <br>
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