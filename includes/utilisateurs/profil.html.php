<section id="infoProfil" class="bg-dark text-white rounded">

    <?php if (isset($errorMsg)) : ?>
        <p><?= $errorMsg; ?></p>
    <?php else : ?>
        <h1><?= "Profil de " . $userProfile['pseudo']; ?></h1>
        <img src="<?= AVATARS_PATH . $userProfile['urlPhoto']; ?>" alt="Photo de Profil ">
        <div>
            <?php if (isset($_SESSION['auth'])) : ?>
                <a href="index.php?action=ajouter-article">Publier un nouvel article</a>
            <?php endif; ?>
            <h2>Articles publiés par <?= $userProfile['pseudo'] ?></h2>
            <ul>
                <?php if (!$articlesByUser) : ?>
                    <li>N'a publié aucun article</li>
                <?php else : ?>
                    <?php foreach ($articlesByUser as $article) : ?>
                        <li>
                            <a href="index.php?action=article&id=<?= $article['id']; ?>"><?= $article['titre']; ?></a>
                            <?php if (isset($_SESSION['auth'])) : ?>
                                <a href="index.php?action=modifier-article&id=<?= $article['id']; ?>">Modifier</a>
                                <a href="index.php?action=supprimer-article&id=<?= $article['id']; ?>">Supprimer</a>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>
        <div>
            <h2>Articles commentés par <?= $userProfile['pseudo']; ?></h2>
            <ul>
                <?php if (!$commentsByUser) : ?>
                    <li>N'a commenté aucun article</li>
                <?php else : ?>
                    <?php foreach ($commentsByUser as $comment) : ?>
                        <li><a href="index.php?action=article&id=<?= $comment['article_id']; ?>"><?= $comment['titre']; ?></a></li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>
        <?php if ((isset($_SESSION['id']) && $_SESSION['id'] == $profilId) || (isset($_SESSION['admin']) && $_SESSION['admin'] == true)) : ?>
            <a href="index.php?action=modifier-profil&id=<?= $profilId; ?>">Modifier profil</a>
        <?php endif; ?>
    <?php endif; ?>

</section>