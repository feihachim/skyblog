<h1>Liste des articles</h1>
<section>
    <ul>
        <?php if ($articles == []) : ?>
            <li>Pas d'articles</li>
        <?php else : ?>
            <?php foreach ($articles as $article) : ?>
                <li>
                    <a href="index.php?action=article&id=<?= $article['id']; ?>"><?= $article['titre']; ?></a>
                    <a href="index.php?action=modifier-article&id=<?= $article['id']; ?>">Modifier</a>
                    <a href="index.php?action=supprimer-article&id=<?= $article['id']; ?>">Supprimer</a>
                </li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
</section>