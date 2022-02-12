<?php
require 'configuration/database.php';

if (isset($_GET['id']))
{
    $articleId = intval($_GET['id']);
    if ($articleId > 0)
    {
        $getArticle = $bdd->prepare("SELECT articles.id,articles.titre,articles.contenu,articles.urlPhoto,articles.utilisateur_id FROM articles WHERE articles.id=?");
        $getArticle->execute([$articleId]);
        if ($getArticle->rowCount() > 0)
        {
            $article = $getArticle->fetch(PDO::FETCH_ASSOC);

            if (isset($_POST['modifierArticle']))
            {
                if (!empty($_POST['title']) && !empty($_POST['content']))
                {
                    $titre = htmlspecialchars($_POST['title']);
                    $contenu = nl2br(htmlspecialchars($_POST['content']));

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
                        else
                        {
                            $errorMsg = "Une erreur est survenue";
                        }
                    }
                    else
                    {
                        $file = NULL;
                    }

                    if (!isset($errorMsg))
                    {
                        $nom_fichier = "nom du fichier : " . $_FILES['file']['name'];
                        if ($file == NULL)
                        {
                            $updateArticle = $bdd->prepare("UPDATE articles SET titre=?,contenu=? WHERE id=?");
                            $updateArticle->execute([$titre, $contenu, $articleId]);
                        }
                        else
                        {
                            $updateArticle = $bdd->prepare("UPDATE articles SET titre=?,contenu=?,urlPhoto=? WHERE id=?");
                            $updateArticle->execute([$titre, $contenu, $file, $articleId]);
                        }
                        //var_dump($file);
                        if ($updateArticle->rowCount() > 0)
                        {
                            if ($file != null)
                            {
                                unlink(ARTICLES_IMAGES_PATH . $article['urlPhoto']);
                            }
                            header('Location: index.php?action=mon-profil');
                        }
                        else
                        {
                            $errorMsg = "Erreur lors de la modification de l'article...";
                        }
                    }
                }
                else
                {
                    $errorMsg = "Veuillez remplir tous les champs...";
                }
            }
        }
        else
        {
            $errorMsg = "Cet article n'existe pas...";
        }
    }
    else
    {
        $errorMsg = "Cet article n'existe pas...";
    }
}
