<h1>Modifier profil</h1>
<form class="article-form bg-dark text-white" action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="pseudo" class="form-label">Pseudo</label>
        <input type="text" class="form-control" name="pseudo" id="pseudo" value="<?= $userInfo['pseudo'] ?? ''; ?>">
    </div>
    <div class="mb-3">
        <label for="file" class="form-label">Avatar</label>
        <input type="file" class="form-control" name="file" id="file">
    </div>
    <input type="submit" name="editer" value="Modifier">
    <?php if (isset($errorMsg)) : ?>
        <p><?= $errorMsg; ?></p>
    <?php endif; ?>
</form>