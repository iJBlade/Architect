<?php
/* ******** * Contrôleur pour afficher l'espace shop               * ******** */
/*            Param : statut = 1 -> tous ceux qui sont en ligne               */
/*            View = Côté Admin et Client                                     */        
/* ***************** * Librairie classe et connexion * ********************** */
    include 'lib/init.php';  
    session_start();
/****************** * Programmation * *************************************** */ 
    $produit = new produit();
    $produit->loadFromTab($_POST);
    //$ligne=$produit->recherche(); // tous les produits en ligne
    //$ligne1=$produit->cat1();
    //$ligne2=$produit->cat2();
    //$ligne3=$produit->cat3();

    $select = $bdd->prepare("SELECT * FROM produit WHERE statut = 1 ");
    $select->execute();

include "templates/pages/shop.php";    
      