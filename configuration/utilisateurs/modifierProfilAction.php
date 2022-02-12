<?php
require 'configuration/database.php';

$profilId = intval($_GET['id'] ?? $_SESSION['id']);

if ($profilId > 0)
{
    $getUser = $bdd->prepare("SELECT id,pseudo,urlPhoto FROM utilisateurs WHERE id=?");
    $getUser->execute([$profilId]);

    if ($getUser->rowCount() > 0)
    {
        $userInfo = $getUser->fetch(PDO::FETCH_ASSOC);
        $currentPhoto = $userInfo['urlPhoto'];

        if (isset($_POST['editer']))
        {

            $pseudo = htmlspecialchars($_POST['pseudo']);

            /*if (!empty($_FILES['file']))
            {
                //var_dump($_FILES['file']);
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
                if (in_array($extension, $extensions) && $size <= $maxSize && ($error === 0 || $error !== 4))
                {
                    $uniqueName = uniqid('', true);
                    //uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
                    $file = $uniqueName . "." . $extension;
                    //$file = 5f586bf96dcd38.73540086.jpg
                    move_uploaded_file($tmp_name, ARTICLES_IMAGES_PATH . $file);
                }
                elseif ($error != 0)
                {
                    $errorMsg = "Une erreur est survenue";
                }
                elseif ($size > $maxSize)
                {
                    $errorMsg = "Taille du fichier trop grande";
                }
                else
                {
                    $errorMsg = "Mauvaise extension";
                }
            }
            else
            {
                $file = NULL;
            }*/

            if (!isset($errorMsg))
            {
                //if ($file == NULL)
                //{
                $updateUser = $bdd->prepare("UPDATE utilisateurs SET pseudo=? WHERE id=?");
                $updateUser->execute([$pseudo, $profilId]);
                //}
                /*else
                {
                    $updateUser = $bdd->prepare("UPDATE utilisateurs SET pseudo=?,urlPhoto=? WHERE id=?");
                    $updateUser->execute([$pseudo, $file, $profilId]);
                }*/

                if ($updateUser->rowCount() > 0)
                {
                    /*if ($file != null && $currentPhoto != 'blank-profile-picture-g57d8d01f3_640.png')
                    {
                        unlink(AVATARS_PATH . $currentPhoto);
                    }*/
                    header('Location: index.php?action=mon-profil');
                }
                else
                {
                    $errorMsg = "Erreur lors de la modifiaction du profil";
                }
            }
        }
    }
}
