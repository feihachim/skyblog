<h1>Modifier profil</h1>
<form action="" method="post" enctype="multipart/form-data">
    <div>
        <label for="">Pseudo</label>
        <input type="text" name="pseudo" id="pseudo" value="<?= $userInfo['pseudo'] ?? ''; ?>">
    </div>
    <div>
        <label for="">Avatar</label>
        <input type="file" name="file" id="file">
    </div>
    <input type="submit" name="editer" value="Modifier">
    <?php if (isset($errorMsg)) : ?>
        <p><?= $errorMsg; ?></p>
    <?php endif; ?>
</form>