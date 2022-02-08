<?php
session_start();

$action = $_GET['action'] ?? 'home';

if ($action === 'inscription')
{
    $title = "Inscription";
    ob_start();
    require 'configuration/utilisateurs/inscriptionAction.php';
    require 'includes/utilisateurs/inscription.html.php';
    $content = ob_get_clean();
    require 'includes/template.html.php';
}
elseif ($action === 'article')
{
    $title = "Article";
    ob_start();
    require 'configuration/articles/articleAction.php';
    require 'includes/articles/article.html.php';
    $content = ob_get_clean();
    require 'includes/template.html.php';
}
elseif ($action === 'ajouter-article')
{
    require 'configuration/utilisateurs/securityAction.php';
    $title = "Nouvel article";
    ob_start();
    require 'configuration/articles/ajouterArticleAction.php';
    require 'includes/articles/ajouter-article.html.php';
    $content = ob_get_clean();
    require 'includes/template.html.php';
}
elseif ($action === 'blogger')
{
    $title = "Articles du blogger";
    ob_start();
    require 'configuration/articles/bloggerArticlesAction.php';
    require 'includes/articles/blogger.html.php';
    $content = ob_get_clean();
    require 'includes/template.html.php';
}
elseif ($action === 'connexion')
{
    $title = "Connexion";
    ob_start();
    require 'configuration/utilisateurs/connexionAction.php';
    require 'includes/utilisateurs/connexion.html.php';
    $content = ob_get_clean();
    require 'includes/template.html.php';
}
elseif ($action === 'deconnexion')
{
    require 'configuration/utilisateurs/deconnexionAction.php';
}
elseif ($action === 'mes-articles')
{
    require 'configuration/utilisateurs/securityAction.php';
    $title = "Mes articles";
    ob_start();
    require 'configuration/articles/mesArticlesAction.php';
    require 'includes/articles/mes-articles.html.php';
    $content = ob_get_clean();
    require 'includes/template.html.php';
}
elseif ($action === 'modifier-article')
{
    require 'configuration/utilisateurs/securityAction.php';
    $title = "Modifier l'article";
    ob_start();
    require 'configuration/articles/modifierArticleAction.php';
    require 'includes/articles/modifier-article.html.php';
    $content = ob_get_clean();
    require 'includes/template.html.php';
}
elseif ($action === 'profil')
{
    require 'configuration/utilisateurs/securityAction.php';
    $title = "Profil";
    ob_start();
    require 'configuration/utilisateurs/profilAction.php';
    require 'includes/utilisateurs/profil.html.php';
    $content = ob_get_clean();
    require 'includes/template.html.php';
}
elseif ($action === 'supprimer-article')
{
    require 'configuration/utilisateurs/securityAction.php';
    require 'configuration/articles/supprimerArticleAction.php';
}
elseif ($action === 'ajouter-commentaire')
{
    require 'configuration/utilisateurs/securityAction.php';
    $title = "Nouveau commentaire";
    ob_start();
    require 'configuration/commentaires/ajouterCommentaireAction.php';
    require 'includes/commentaires/ajouter-commentaire.html.php';
    $content = ob_get_clean();
    require 'includes/template.html.php';
}
else
{
    $title = "HYT blog";
    ob_start();
    require 'configuration/articles/listeArticlesAction.php';
    require 'includes/articles/listeArticles.html.php';
    $content = ob_get_clean();
    require 'includes/template.html.php';
}
