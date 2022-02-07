<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

</head>

<body>
    <header>
        <div class="logo">
            <img src="img/header2.png" alt="Logo Blog" width="100%" height="150px">
        </div>
        <div class="nav">

            <div class="search"> <input type="search" placeholder="Rechercher.." aria-label="Search through site content">
                <ion-icon name="search" id="search"></ion-icon>
            </div>

            <div class="home">
               
            </div>
            <br>
            <div class="chat">
                <ion-icon name="chatboxes"></ion-icon> <br> <span>Chat</span>
            </div>
            <div class="login"> <a href="connexion.php"><Button>Connexion</Button></a></div>
            <div class="register"><a href="inscription.php"> <button>Inscription</button></a></div>
            <div class="burger">
                <ion-icon name="menu"></ion-icon>
            </div>
            <div class="close">
                <ion-icon name="close"></ion-icon>
            </div>






        </div>

    </header>

    <main>

        <!-- Crrousel avec Bootstrap -->

        <div id="carouselExampleCaptions" class="carousel  carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="carrou/Burger.jpg" class="d-block w-100" alt="..." >
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: black;">PUB1</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="carrou/tuto.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="carrou/Hotel.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>





    </main>






    <footer>

        <div>Politique de Confidentialité</div>
        <div>CopyRights☺</div>
        <div> Dev 2022</div>

    </footer>

    <script src="app.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>