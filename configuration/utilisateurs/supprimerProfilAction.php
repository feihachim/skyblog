<?php
require 'configuration/database.php';

$profilId = intval($_GET['id']);

if ($profilId && isset($_SESSION['admin']) && $_SESSION['admin'] == true && $profilId != $_SESSION['id'])
{
    $getUser = $bdd->prepare("SELECT id,urlPhoto FROM utilisateurs WHERE id=?");
    $getUser->execute([$profilId]);

    if ($getUser->rowCount() > 0)
    {
        $userInfo = $getUser->fetch(PDO::FETCH_ASSOC);
        $avatarPhoto = $userInfo['urlPhoto'];
        $deleteCommentsByUser = $bdd->prepare("DELETE FROM commentaires WHERE utilisateur_id=?");
        $deleteCommentsByUser->execute([$profilId]);

        $getArticlesPhotosByUser = $bdd->prepare("SELECT urlPhoto FROM articles WHERE utilisateur_id=?");
        $getArticlesPhotosByUser->execute([$profilId]);

        if ($getArticlesPhotosByUser->rowCount() > 0)
        {
            $urlPhotos = $getArticlesPhotosByUser->fetchAll(PDO::FETCH_ASSOC);
        }
        else
        {
            $urlPhotos = false;
        }

        $deleteArticlesByUser = $bdd->prepare("DELETE FROM articles WHERE utilisateur_id=?");
        $deleteArticlesByUser->execute([$profilId]);

        $deleteUser = $bdd->prepare("DELETE FROM utilisateurs WHERE id=?");
        $deleteUser->execute([$profilId]);

        if ($deleteUser->rowCount() > 0 && $avatarPhoto != 'blank-profile-picture-g57d8d01f3_640.png')
        {
            unlink(AVATARS_PATH . $avatarPhoto);
        }


        header('Location: index.php?action=admin.profils');
    }
    else
    {
        header('Location:index.php');
    }
}
else
{
    header('Location: index.php');
}
