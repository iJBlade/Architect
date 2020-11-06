<?php
/* ******** * Contrôleur pour afficher le détail d'un produit du SHOP ******* */
/*            Param : statut = 1 -> tous ceux qui sont en ligne               */
/*            View = Côté Admin et Client                                     */        
/* ***************** * Librairie classe et connexion * ********************** */
    include 'lib/init.php';  
    session_start();
/****************** * Programmation * *************************************** */ 

    // pour l'article principale
        $linkProduit = $_GET["id"];
        $select = $bdd->prepare("SELECT * FROM produit WHERE id = $linkProduit");
        $select->execute();

    // pour la section vous devriez aussi aimer 
        $prod = new produit();
        $ligne1=$prod->cat1();

include "templates/pages/shopping.php";