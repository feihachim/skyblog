<section id="article" style="color:white">
    <?php if (isset($errorMsg)) : ?>
        <p><?= $errorMsg; ?></p>
    <?php else : ?>
        <h1>Mes articles</h1>
        <p><a href="index.php?action=ajouter-article">Nouvel article</a></p>
        <ul>
            <?php foreach ($articles as $article) : ?>
                <li>
                    <a href="index.php?action=article&id=<?= $article['id']; ?>"><?= $article['titre']; ?></a>
                    <a href="index.php?action=modifier-article&id=<?= $article['id']; ?>">Modifier</a>
                    <a href="index.php?action=supprimer-article&id=<?= $article['id']; ?>">Supprimer</a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</section>