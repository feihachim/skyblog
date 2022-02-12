<section id="article">
    <h1>Les derniers articles</h1>
    <?php if (isset($errorMsg)) : ?>
        <p><?= $errorMsg; ?></p>
    <?php else : ?>
        <?php foreach ($listArticles as $article) : ?>
            <div>
                <h2><a href="index.php?action=article&id=<?= $article['id']; ?>"><?= $article['titre']; ?></a></h2>
                <p>Ecrit par <a href="index.php?action=profil&id=<?= $article['utilisateur_id']; ?>"><?= $article['pseudo']; ?></a> le <?= $article['date_creation']; ?>
                </p>
                <p>
                    <ion-icon name="text" id="comment"> <span>Contenu</span>
                </p>
            </div>
            <br><br>
        <?php endforeach; ?>
    <?php endif; ?>
</section>