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
    <header>
        <div class="logo">
            <img src="assets/images/img/header2.png" alt="Logo Blog" width="100%" height="150px">
        </div>
        <div class="nav">

            <div class="search"> <input type="search" placeholder="Rechercher un blogger.." aria-label="Search through site content">
                <ion-icon name="search" id="search"></ion-icon>
            </div>

            <div class="home">
                <ion-icon name="home"> </ion-icon><a href="index.php">Home</a>
            </div>
            <br>
            <div class="chat">
                <ion-icon name="chatboxes"></ion-icon><a href="#">Chat</a>
            </div>
            <?php if (isset($_SESSION['auth'])) : ?>
                <div class="my-articles"><a href="index.php?action=mes-articles">Mes articles</a></div>
                <div class="profil"><a href="index.php?action=profil">Profil</a></div>
                <div class="logout"><a href="index.php?action=deconnexion">Déconnexion</a></div>
            <?php else : ?>
                <div class="login"> <a href="index.php?action=connexion">Connexion</a></div>
                <div class="register"> <a href="index.php?action=inscription">Inscription</a></div>
            <?php endif; ?>

            <div class="burger">
                <ion-icon name="menu"></ion-icon>
            </div>
            <div class="close">
                <ion-icon name="close"></ion-icon>
            </div>
        </div>
    </header>
    <main>
        <br><br>
        <?= $content; ?>
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