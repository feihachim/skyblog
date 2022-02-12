<header>
    <div class="logo">
        <img src="assets/images/img/header2.png" alt="Logo Blog" width="100%" height="150px">
    </div>
    <div class="nav">
        <div class="search">
            <form action="index.php?action=chercher-profil" method="post">
                <input type="search" name="search-input" placeholder="Rechercher un blogger.." aria-label="Search through site content">
                <button type="submit">
                    <ion-icon name="search" name="search"></ion-icon>
                </button>
            </form>
        </div>
        <div class="home">
            <a href="index.php">
                <ion-icon name="home"></ion-icon>Home
            </a>
        </div>
        <br>
        <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) : ?>
            <div class="admin"><a href="index.php?action=admin">Admin</a></div>
        <?php endif; ?>
        <div class="chat">
            <ion-icon name="chatboxes"></ion-icon><a href="#">Chat</a>
        </div>
        <?php if (isset($_SESSION['auth'])) : ?>
            <div class="mon-profil"><a href="index.php?action=mon-profil">Mon profil</a></div>
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