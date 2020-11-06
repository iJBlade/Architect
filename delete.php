<?php
/* ******** * Contrôleur pour supprimer l'entiereté d'un article ou d'un produit* ************* */
/*            Param : - récupéré l'id de l'article/produit EN LIGNE a supprimer    
              Côté ADMIN
/* *********************** * Librairie classe et connexion * ********************************** */

    include 'lib/init.php';
        // pour supprimer un article    
        $id=$_GET['id']; // $id de l'article détaillé en URL
        $sql= "DELETE FROM article WHERE id=$id";
        $req = $bdd->prepare($sql);
        $req->execute();

        // pour supprimer un produit
        $id_prod=$_GET["prod"];
        $sql2= "DELETE FROM produit WHERE id=$id_prod";
        $req2 = $bdd->prepare($sql2);
        $req2->execute();

header("Location:dashboard.php");

        
