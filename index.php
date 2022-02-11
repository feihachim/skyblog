<?php
session_start();

require 'configuration/action.php';

$action = $_GET['action'] ?? 'home';

switch ($action)
{
    case 'inscription':
        render("Inscription", 'configuration/utilisateurs/inscriptionAction.php', 'includes/utilisateurs/inscription.html.php');
        break;
    case 'article':
        render("Article", 'configuration/articles/articleAction.php', 'includes/articles/article.html.php');
        break;
    case 'ajouter-article':
        require 'configuration/utilisateurs/securityAction.php';
        render("Nouvel article", 'configuration/articles/ajouterArticleAction.php', 'includes/articles/ajouter-article.html.php');
        break;
    case 'blogger':
        render("Articles du blogger", 'configuration/articles/bloggerArticlesAction.php', 'includes/articles/blogger.html.php');
        break;
    case 'connexion':
        render("Connexion", 'configuration/utilisateurs/connexionAction.php', 'includes/utilisateurs/connexion.html.php');
        break;
    case 'deconnexion':
        require 'configuration/utilisateurs/deconnexionAction.php';
        break;
    case 'mes-articles':
        require 'configuration/utilisateurs/securityAction.php';
        render("Mes articles", 'configuration/articles/mesArticlesAction.php', 'includes/articles/mes-articles.html.php');
        break;
    case 'modifier-article':
        require 'configuration/utilisateurs/securityAction.php';
        render("Modifier l'article", 'configuration/articles/modifierArticleAction.php', 'includes/articles/modifier-article.html.php');
        break;
    case 'supprimer-article':
        require 'configuration/utilisateurs/securityAction.php';
        require 'configuration/articles/supprimerArticleAction.php';
        break;
    case 'ajouter-commentaire':
        require 'configuration/utilisateurs/securityAction.php';
        render("Nouveau commentaire", 'configuration/commentaires/ajouterCommentaireAction.php', 'includes/commentaires/ajouter-commentaire.html.php');
        break;
    case 'modifier-commentaire':
        require 'configuration/utilisateurs/securityAction.php';
        render("Modifiaction du commentaire", 'configuration/commentaires/modifierCommentaireAction.php', 'includes/commentaires/modifier-commentaire.html.php');
        break;
    case 'supprimer-commentaire':
        require 'configuration/utilisateurs/securityAction.php';
        require 'configuration/commentaires/supprimerCommentaireAction.php';
        break;
    case 'profil':
        require 'configuration/utilisateurs/securityAction.php';
        render("Profil", 'configuration/utilisateurs/profilAction.php', 'includes/utilisateurs/profil.html.php');
        break;
    case 'admin':
        require 'configuration/admin/securityAdminAction.php';
        render("Espace administrateur", 'configuration/admin/adminAction.php', 'includes/admin/admin.html.php');
        break;
    case 'admin.articles':
        require 'configuration/admin/securityAdminAction.php';
        render("Liste des articles", 'configuration/admin/adminArticlesAction.php', 'includes/admin/admin-articles.html.php');
        break;
    case 'admin.profils':
        require 'configuration/admin/securityAdminAction.php';
        render("Liste des profils", 'configuration/admin/adminProfilsAction.php', 'includes/admin/admin-profils.html.php');
        break;
    default:
        render("HYT blog", 'configuration/articles/listeArticlesAction.php', 'includes/articles/listeArticles.html.php');
        break;
}
