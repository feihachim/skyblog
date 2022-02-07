<h1>Mofifier Article</h1>
<section id="article">
    <form action="" method="post" enctype="multipart/form-data">
        <h2><?= $nom_fichier ?? 'Il n\'y a pas de fichier'; ?></h2>
        <div>
            <label for="title">Titre : </label>
            <input type="text" name="title" id="title" value="<?= $article['titre'] ?? ''; ?>">
        </div>
        <div>
            <label for="file">Fichier image</label>
            <input type="file" name="file" id="file">
        </div>
        <div>
            <label for="content">Contenu : </label>
            <textarea name="content" id="content"><?= $article['contenu'] ?? ''; ?></textarea>
        </div>
        <input type="submit" name="modifierArticle" value="Modifier">
        <?php if (isset($errorMsg)) : ?>
            <p><?= $errorMsg; ?></p>
        <?php endif; ?>
    </form>
</section>