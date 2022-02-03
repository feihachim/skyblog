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
            <div class="my-articles"><a href="mes-articles.php">Mes articles</a></div>
            <div class="profil"><a href="profil.php">Profil</a></div>
            <div class="logout"><a href="deconnexion.php">Déconnexion</a></div>
        <?php else : ?>
            <div class="login"> <a href="connexion.php">Connexion</a></div>
            <div class="register"> <a href="inscription.php">Inscription</a></div>
        <?php endif; ?>

        <div class="burger">
            <ion-icon name="menu"></ion-icon>
        </div>
        <div class="close">
            <ion-icon name="close"></ion-icon>
        </div>
    </div>
</header>