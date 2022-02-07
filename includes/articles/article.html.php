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
</section>