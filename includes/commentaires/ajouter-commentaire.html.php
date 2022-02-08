<section id="article">
    <?php if (isset($errorMsg)) : ?>
        <p><?= $errorMsg; ?></p>
    <?php else : ?>
        <div>
            <h1><?= $article['titre']; ?></h1>
            <br>
            <?php if ($article['urlPhoto'] != NULL) : ?>
                <img src="<?= ARTICLES_IMAGES_PATH . $article['urlPhoto']; ?>" alt="PhotoArticle">
            <?php endif; ?>
            <br>
            <p><?= $article['contenu']; ?></p>
            <br><br>
            <i>Ecrit par <a href="index.php?action=blogger&id=<?= $article['utilisateur_id']; ?>"><?= $article['pseudo']; ?></a> le <?= $article['date_creation']; ?></i>
            <p>
                <ion-icon name="text" id="comment"> <span>Contenu</span>
            </p>
        </div>
    <?php endif; ?>
    <div>
        <h3>Commentaires</h3>
        <form action="" method="post">
            <div>
                <label for="comment">Description du commentaire</label>
                <textarea name="comment" id="comment"></textarea>
            </div>
            <input type="submit" name="publier" value="Publier">
            <?php if (isset($errorMsgComment)) : ?>
                <p><?= $errorMsgComment; ?></p>
            <?php endif; ?>
        </form>
        <?php if (!$comments) : ?>
            <p>Pas de commentaire</p>
        <?php else : ?>
            <?php foreach ($comments as $comment) : ?>
                <article>
                    <h4>Ecrit par <a href="index.php?action=blogger&id=<?= $comment['utilisateur_id']; ?>"><?= $comment['pseudo']; ?></a> le <?= $comment['date_creation']; ?></h4>
                    <p><?= $comment['contenu']; ?></p>
                    < </article>
                    <?php endforeach; ?>
                <?php endif; ?>
    </div>
</section>