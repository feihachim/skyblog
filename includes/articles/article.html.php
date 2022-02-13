<section id="article" class="bg-dark text-white rounded">
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
            <i>Ecrit par <a href="index.php?action=profil&id=<?= $article['utilisateur_id']; ?>"><?= $article['pseudo']; ?></a> le <?= $article['date_creation']; ?></i>
            <p>
                <ion-icon name="text" id="comment"> <span>Contenu</span>
            </p>
        </div>
    <?php endif; ?>
    <div class="commentaires">
        <h3>Commentaires</h3>
        <?php if (!isset($userComment) && isset($_SESSION['auth'])) : ?>
            <p>
                <a href="index.php?action=ajouter-commentaire&article=<?= $article['id']; ?>">Nouveau commentaire</a>
            </p>
        <?php endif; ?>
        <?php if (!$comments) : ?>
            <p>Pas de commentaire</p>
        <?php else : ?>
            <?php foreach ($comments as $comment) : ?>
                <article>
                    <p><?= $comment['contenu']; ?></p>
                    <h4>Ecrit par <a href="index.php?action=profil&id=<?= $comment['utilisateur_id']; ?>"><?= $comment['pseudo']; ?></a> le <?= $comment['date_creation']; ?></h4>
                    <?php if ((isset($_SESSION['id']) && $_SESSION['id'] == $comment['utilisateur_id']) || (isset($_SESSION['admin']) && $_SESSION['admin'] == true)) : ?>
                        <p>
                            <a href="index.php?action=modifier-commentaire&id=<?= $userComment['comment_id']; ?>">Modifier</a>
                            <a href="index.php?action=supprimer-commentaire&id=<?= $userComment['comment_id']; ?>">Supprimer</a>
                        </p>
                    <?php endif; ?>
                </article>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>