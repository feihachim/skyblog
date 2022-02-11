<h1>Liste des bloggers</h1>
<section>
    <ul>
        <?php foreach ($usersInfo as $userInfo) : ?>
            <li>
                <a href="index.php?action=profil&id=<?= $userInfo['id']; ?>"><?= $userInfo['pseudo']; ?></a>
                <a href="index.php?action=modifier-profil&id=<?= $userInfo['id']; ?>">Modifier</a>
                <a href="index.php?action=supprimer-profil&id=<?= $userInfo['id']; ?>">Supprimer</a>
            </li>
        <?php endforeach; ?>
    </ul>
</section>