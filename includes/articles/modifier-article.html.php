<h1>Mofifier Article</h1>
<br>
<form class="article-form bg-dark text-white" action="" method="post" enctype="multipart/form-data">
    <!--<h2><?= $nom_fichier ?? 'Il n\'y a pas de fichier'; ?></h2>-->
    <div class="mb-3">
        <label for="title" class="form-label">Titre : </label>
        <input type="text" name="title" id="title" class="form-control" value="<?= $article['titre'] ?? ''; ?>">
    </div>
    <div class="mb-3">
        <label for="file" class="form-label">Fichier image</label>
        <input type="file" name="file" class="form-control" id="file">
    </div>
    <div class="mb-3">
        <label for="content">Contenu : </label>
        <textarea name="content" id="content" class="form-control" rows="7"><?= $article['contenu'] ?? ''; ?></textarea>
    </div>
    <input type="submit" class="btn btn-primary" name="modifierArticle" value="Modifier">
    <?php if (isset($errorMsg)) : ?>
        <div class="alert alert-warning" role="alert">
            <?= $errorMsg; ?>
        </div>
    <?php endif; ?>
</form>