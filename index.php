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
    case 'connexion':
        render("Connexion", 'configuration/utilisateurs/connexionAction.php', 'includes/utilisateurs/connexion.html.php');
        break;
    case 'deconnexion':
        require 'configuration/utilisateurs/deconnexionAction.php';
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
        render("Profil", 'configuration/utilisateurs/profilAction.php', 'includes/utilisateurs/profil.html.php');
        break;
    case 'chercher-profil':
        render("Recherche profil", 'configuration/utilisateurs/chercherProfilAction.php', 'includes/utilisateurs/chercher-profil.html.php');
        break;
    case 'mon-profil':
        require 'configuration/utilisateurs/securityAction.php';
        render("Mon profil", 'configuration/utilisateurs/profilAction.php', 'includes/utilisateurs/profil.html.php');
        break;
    case 'modifier-profil':
        require 'configuration/utilisateurs/securityAction.php';
        render("Modifier profil", 'configuration/utilisateurs/modifierProfilAction.php', 'includes/utilisateurs/modifier-profil.html.php');
        break;
    case 'supprimer-profil':
        require 'configuration/utilisateurs/securityAction.php';
        require 'configuration/utilisateurs/supprimerProfilAction.php';
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
