<section id="article">
    <?php if (isset($errorMsg)) : ?>
        <p><?= $errorMsg; ?></p>
    <?php else : ?>
        <h1>Articles du blogger</h1>
        <ul>
            <?php foreach ($articles as $article) : ?>
                <li><a href="index.php?action=article&id=<?= $article['id']; ?>"><?= $article['titre']; ?></a></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</section>