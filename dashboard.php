<?php
/* ******** * Contrôleur pour afficher le tableau de bord * ************* */
/*            Param : Si il est connecté ok, sinon erreur                 */
/*            View = Côté Admin                                               */        
/* ***************** * Librairie classe et connexion * ********************** */
    include 'lib/init.php';  
    session_start();

/****************** * Programmation * *************************************** */ 
    if(estConnecte()){
        $id= $_SESSION["id"];
        $user = new admin($id);
        // pour les articles
        $article= new article();
        $article->loadFromTab($_POST);
        $lignes=$article->recherche(); // affichage des articles en ligne
        $ligne=$article->rechercheNo_online(); // affichage des articles non en ligne
        // pour les produits
        $produit= new produit();
        $produit->loadFromTab($_POST);
        $result=$produit->recherche(); // affichage des produits en ligne
        $tab=$produit->rechercheNo_online(); // affichage des produits non en ligne

        include "templates/pages/dashboard.php";
    }else{
        $message = "Si vous n'êtes pas un(e) administrateur(trice), vous n'êtes pas autorisé a consulter cette page. Si vous pensez qu'il s'agit d'un erreur, contactez le(a) développeur(euse).";
        include'templates/pages/error.php';
    }
