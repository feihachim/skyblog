<?php
require 'configuration/articles/bloggerArticlesAction.php';
$title = "Articles du blogger";

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
                <h1>Articles du blogger</h1>
                <ul>
                    <?php foreach ($articles as $article) : ?>
                        <li><a href="article.php?id=<?= $article['id']; ?>"><?= $article['titre']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
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