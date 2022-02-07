<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        <?php include 'assets/css/style.css'; ?>
    </style>
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
                <a href="index.php">
                    <ion-icon name="home"></ion-icon>Home
                </a>
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
    <main class="container">
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
        <div>
            Image par <a href="https://pixabay.com/fr/users/wanderercreative-855399/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=973460">Stephanie Edwards</a> de <a href="https://pixabay.com/fr/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=973460">Pixabay</a>
        </div>

        <div> Dev 2022</div>
    </footer>
    <script src="assets/js/app.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>