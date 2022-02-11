<h1>Page administrateur</h1>
<section>
    <p>Nombre d'articles publiés sur le site: <?= $dataNumbers['nb_articles']; ?></p>
    <p>Nombre d'utilisateurs du site : <?= $dataNumbers['nb_utilisateurs']; ?></p>

    <a href="index.php?action=admin.articles">Liste des articles</a>
    <a href="index.php?action=admin.profils">Liste des bloggers</a>
</section>