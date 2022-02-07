<?php 

require('configuration/editProfil.php');

?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

  
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
                <a href="index.php">
                    <ion-icon name="home"> </ion-icon> <br><span>Home</span>
                </a>
            </div>
            <br>
            <div class="chat">
                <ion-icon name="chatboxes"></ion-icon> <br> <span>Chat</span>
            </div>
            <div class="login"> <a href="connexion.php"><Button>Connexion</Button></a></div>
            <div class="register"><a href="inscription.php"> <button>Inscription</button></a></div>
            <div class="profil">
                <ion-icon name="person"></ion-icon> <br>  <?php echo"<span>".$_SESSION['pseudo']."</span>"?><hr>
            </div>
            
            <div class="burger">
                <ion-icon name="menu"></ion-icon>
            </div>
            <div class="close">
                <ion-icon name="close"></ion-icon>
            </div>






        </div>

    </header>
   

    <main id="user">

    <section class="info">

    <div id="exist" style="display:block;">
<img src="" alt="Photo de profil">

 <h1 class="pseudo"> <?php echo"<span>".$_SESSION['pseudo']."</span>"?></h1>

<p>Info User</p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam officia quasi nihil asperiores magnam aperiam exercitationem, tempora repellendus placeat dolores eveniet minima ducimus iusto deleniti. A temporibus vel perspiciatis eligendi?
<hr>
<br> <br>
<button class="editProfil">Modifier Mon Profil</button> <br><br>
<a href="profil.php"><button>Visualiser Mon Profil</button></a>
</div>

<div id="edit" style="display:none;">

<h1 class="pseudo"> <?php echo"<span>".$_SESSION['pseudo']."</span>"?></h1>

<form action="" method="POST">

<input type="text" placeholder="Ma Photo de Profil" name="image">
<textarea name="" id="" cols="30" rows="10" placeholder="Mes Informations Perso" name="info"></textarea>
<button type="submit" name="validate">Valider les modifications</button>

<?php if(isset($erreur)){ 

    echo "<p>".$erreur."</p>";

}
if(isset($message)){ 

    echo "<p>".$message."</p>";

}

?>

</form>



</div>

    </section>

    <section class="article" class="Show">

   <form action="" method="POST">

   <label for="Titre">Titre De l'article</label>
   <input type="text" placeholder="Titre"> <br>

   
   <textarea name="contenu" id="" cols="100" rows="10" >  Votre Contenu</textarea> <br><br>


   <button type="Submit">Publier l'article</button>








   </form>



 




    </section>




    </main>





<!-- 
     <footer>

        <div>Politique de Confidentialité</div>
        <div>CopyRights☺</div>
        <div> Dev 2022</div>

    </footer>  -->

    <script>

let edit = document.querySelector(".editProfil");

edit.addEventListener('click', function() {

        document.getElementById("exist").style.display = "none";
        document.getElementById("edit").style.display = "block";



    })

    </script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>

</html>