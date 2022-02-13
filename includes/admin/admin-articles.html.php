<h1>Liste des articles</h1>
<section class="admin-panel bg-dark text-white w-50 rounded">
    <ul>
        <?php if ($articles == []) : ?>
            <ul class="list-group list-group-horizontal">
                <li class="list-group-item">Pas d'articles</li>
            </ul>
        <?php else : ?>
            <?php foreach ($articles as $article) : ?>
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item">
                        <a href="index.php?action=article&id=<?= $article['id']; ?>"><?= $article['titre']; ?></a>
                    </li>
                    <li class="list-group-item">
                        <a href="index.php?action=modifier-article&id=<?= $article['id']; ?>">Modifier</a>
                    </li>
                    <li class="list-group-item">
                        <a href="index.php?action=supprimer-article&id=<?= $article['id']; ?>">Supprimer</a>
                    </li>
                </ul>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
</section>