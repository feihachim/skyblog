<h1>Résultats de la recherche</h1>
<?php if (isset($errorMsg)) : ?>
    <p><?= $errorMsg; ?></p>
<?php else : ?>
    <ul>
        <?php if (!$listUsers) : ?>
            <li>Aucun résultat</li>
        <?php else : ?>
            <?php foreach ($listUsers as $user) : ?>
                <li>
                    <a href="index.php?action=profil&id=<?= $user['id']; ?>"><?= $user['pseudo']; ?></a>
                </li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
<?php endif; ?>