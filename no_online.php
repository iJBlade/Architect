<?php
/* ******** * Contrôleur pour afficher les articles EN COURS DE CREA * ****** */
/*            Param : - connecte return true else false    
              Côté ADMIN
/* ***************** * Librairie classe et connexion * ********************** */
    include 'lib/init.php';
    session_start();
/* ************************************************************************** */
    if(estConnecte()){
        $id = $_SESSION["id"];
        $user = new admin($id);
        // afficher tous les articles qui ne sont pas en ligne
        $article= new article();
        $article->loadFromTab($_POST);
        $lignes=$article->rechercheNo_online();  
        include 'templates/pages/no_online.php';
    }else{
        $message = "Si vous n'êtes pas un(e) administrateur(trice), vous n'êtes pas autorisé a consulter cette page. Si vous pensez qu'il s'agit d'un erreur, contactez le(a) développeur(euse).";
        include'templates/pages/error.php';
    }
