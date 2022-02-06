<section id="article" style="color:white">
    <?php if (isset($errorMsg)) : ?>
        <p><?= $errorMsg; ?></p>
    <?php else : ?>
        <div>
            <h1><?= $article['titre']; ?></h1>
            <br>
            <p><?= $article['contenu']; ?></p>
            <br>
            <img src="" alt="PhotoArticle">
            <br><br>
            <i>Ecrit par <a href="index.php?action=blogger&id=<?= $article['utilisateur_id']; ?>"><?= $article['pseudo']; ?></a> le <?= $article['date_creation']; ?></i>
            <p>
                <ion-icon name="text" id="comment"> <span>Contenu</span>
            </p>
        </div>
    <?php endif; ?>
</section>