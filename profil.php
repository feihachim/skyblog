<?php
require 'configuration/utilisateurs/securityAction.php';
$title = "Profil";
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

        <section id="infoProfil">
            <img src="" alt="Photo de Profil">
            <h1>Pseudo</h1>

        </section>

        <section id=article>

            <div id="addArticle">




            </div>



            <div id="showArticle">

                <h1>titreArticle</h1>
                <p>ContenuArticle</p>
                <img src="" alt="PhotoArticle">
                <p>date_creation</p>
                <p>
                    <ion-icon name="text" id="comment"> <span>Contenu</span>
                </p>


            </div>
        </section>









    </main>










    <script src="app.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>

</html>