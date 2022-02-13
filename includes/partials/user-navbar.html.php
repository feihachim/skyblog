<header>
    <div class="logo">
        <img src="assets/images/img/header2.png" alt="Logo Blog" width="100%" height="150px">
    </div>
    <div class="nav">
        <div class="search">
            <form class="searchbar d-flex" action="index.php?action=chercher-profil" method="post">
                <input class="form-control me-2" name="search-input" type="search" placeholder="Blogger..." aria-label="Search">
                <button name="search" class="btn" type="submit">
                    <ion-icon name="search" id="search"></ion-icon>
                </button>
            </form>
        </div>
        <div class="home">
            <ion-icon name="home"></ion-icon>
            <a href="index.php">Home</a>
        </div>
        <br>
        <div class="chat">
            <ion-icon name="chatboxes"></ion-icon><a>Chat</a>
        </div>
        <div class="mon-profil"><a href="index.php?action=mon-profil">Mon profil</a></div>
        <div class="logout"><a href="index.php?action=deconnexion">Déconnexion</a></div>
        <div class="burger">
            <ion-icon name="menu"></ion-icon>
        </div>
        <div class="close">
            <ion-icon name="close"></ion-icon>
        </div>
    </div>
</header>