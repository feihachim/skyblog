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