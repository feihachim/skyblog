<?php
require 'configuration/database.php';

if (isset($_POST['publierArticle']))
{
    if (!empty($_POST['title']) && !empty($_POST['content']))
    {
        if (isset($_FILES['file']))
        {
            $tmp_name = $_FILES['file']['tmp_name'];
            $name = $_FILES['file']['name'];
            $size = $_FILES['file']['size'];
            $error = $_FILES['file']['error'];

            $tab_extension = explode('.', $name);
            $extension = strtolower(end($tab_extension));
            //Tableau des extensions que l'on accepte
            $extensions = ['jpg', 'png', 'jpeg', 'gif'];
            //Taille max que l'on accepte (en bytes)
            $maxSize = 1000000;
            if (in_array($extension, $extensions) && $size <= $maxSize && $error === 0)
            {
                $uniqueName = uniqid('', true);
                //uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
                $file = $uniqueName . "." . $extension;
                //$file = 5f586bf96dcd38.73540086.jpg
                move_uploaded_file($tmp_name, ARTICLES_IMAGES_PATH . $file);
            }
            elseif (!in_array($extension, $extensions))
            {
                $errorMsg = "Mauvaise extension";
            }
            elseif ($size > $maxSize)
            {
                $errorMsg = "Taille du fichier trop grande";
            }
            else
            {
                $errorMsg = "Une erreur est survenue";
            }
        }
        else
        {
            $file = NULL;
        }
        $titre = htmlspecialchars($_POST['title']);
        $contenu = nl2br(htmlspecialchars($_POST['content']));
        $date_creation = date_create()->format('Y-m-d H:i:s');
        $utilisateur_id = $_SESSION['id'];
        if (!isset($errorMsg))
        {
            $insertArticle = $bdd->prepare("INSERT INTO articles (titre,contenu,urlPhoto,date_creation,utilisateur_id) VALUES (?,?,?,?,?)");
            $insertArticle->execute([$titre, $contenu, $file, $date_creation, $utilisateur_id]);

            if ($insertArticle->rowCount() > 0)
            {
                header('Location: index.php?action=mon-profil');
            }
            else
            {
                $errorMsg = "Erreur lors de l'ajout de l'article...";
            }
        }
    }
    else
    {
        $errorMsg = "Veuillez remplir tousles champs..";
    }
}
