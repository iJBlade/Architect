<?php

/* ******** * Contrôleur pour afficher les produits selon categorie  * ****** */
/*            Param : - connecte return true else false    
              Côté ADMIN et CLIENT
/* ***************** * Librairie classe et connexion * ********************** */
    include 'lib/init.php';  
    session_start();

/****************** * Programmation * *************************************** */ 
    if(estConnecte()){
        $id= $_SESSION["id"];
        $user = new admin($id);
    }else{

    }

    $produit = new produit();
    $produit->loadFromTab($_POST);
    $ligne=$produit->recherche(); // tous les produits en ligne
    $ligne1=$produit->cat1();
    $ligne2=$produit->cat2();
    $ligne3=$produit->cat3();


    include 'templates/pages/shop.php';
