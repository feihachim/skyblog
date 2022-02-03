<?php
require 'configuration/articles/articleAction.php';
$title = "Article";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
</head>

<body>
    <?php include 'includes/navbar.php'; ?>
    <main>
        <section id="article" style="color:white">
            <?php if (isset($errorMsg)) : ?>
                <p><?= $errorMsg; ?></p>
            <?php else : ?>
                <div>
                    <h2><?= $article['titre']; ?></h2>
                    <br>
                    <p><?= $article['contenu']; ?></p>
                    <br>
                    <img src="" alt="PhotoArticle">
                    <br><br>
                    <i>Ecrit par <a href="blogger.php?id=<?= $article['utilisateur_id']; ?>"><?= $article['pseudo']; ?></a> le <?= $article['date_creation']; ?></i>
                    <p>
                        <ion-icon name="text" id="comment"> <span>Contenu</span>
                    </p>
                </div>
            <?php endif; ?>
        </section>
        <section id="carousel">
            <div id="container">
                <img src="assets/images/img/gauche.png" id="left" height="50px">
                <img src="assets/images/img/droite.png" id="right" height="50px">
            </div>

        </section>
    </main>
    <footer>
        <div>Politique de Confidentialité</div>
        <div>CopyRights☺</div>
        <div> Dev 2022</div>
    </footer>
    <script src="assets/js/app.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>

</html>