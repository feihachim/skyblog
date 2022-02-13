<h1>Nouvel article</h1>
<br>
<form class="article-form bg-dark text-white" action="" method="post" enctype="multipart/form-data" class="w-50">
    <div class="mb-3">
        <label for="title" class="form-label">Titre : </label>
        <input type="text" name="title" id="title" class="form-control">
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Contenu : </label>
        <textarea name="content" id="content" class="form-control" rows="7"></textarea>
    </div>
    <div class="mb-3">
        <label for="file" class="form-label">Fichier image : </label>
        <input type="file" name="file" id="file" class="form-control">
    </div>
    <input type="submit" class="btn btn-primary" name="publierArticle" value="Publier">
</form>
<?php if (isset($errorMsg)) : ?>
    <div class="alert alert-warning" role="alert">
        <?= $errorMsg; ?>
    </div>
<?php endif; ?>