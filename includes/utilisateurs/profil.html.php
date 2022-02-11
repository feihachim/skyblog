<section id="infoProfil">
    <img src="" alt="Photo de Profil">
    <?php if (isset($errorMsg)) : ?>
        <p><?= $errorMsg; ?></p>
    <?php else : ?>
        <h1><?= $userProfile['pseudo']; ?></h1>
    <?php endif; ?>

</section>