<?php
/* ******** * Contrôleur pour supprimer l'entiereté d'un article ou d'un produit* ************* */
/*            Param : - récupéré l'id de l'article/produit EN LIGNE a supprimer    
              Côté ADMIN
/* *********************** * Librairie classe et connexion * ********************************** */

    include 'lib/init.php';
    session_start();
    if(estConnecte()){
        // récupération des infos de l'admin
            $id= $_SESSION["id"];
            $user = new admin($id);
        if(isset($_GET["id"])){
            $id=$_GET['id']; // $id de l'article détaillé en URL
            $sql= "DELETE FROM article WHERE id=$id";
            $req = $bdd->prepare($sql);
            $req->execute();

        }
        if(isset($_GET["prod"])){
            $id_prod=$_GET["prod"];
            $sql2= "DELETE FROM produit WHERE id=$id_prod";
            $req2 = $bdd->prepare($sql2);
            $req2->execute();
        }
        if(isset($_GET["chronique"])){
            $id_chronique=$_GET["chronique"];
            $sql3= "DELETE FROM chronique WHERE id=$id_chronique";
            $req3 = $bdd->prepare($sql3);
            $req3->execute();

        }
        header("Location:dashboard.php");

    }else{
        $message = "Si vous n'êtes pas un(e) administrateur(trice), vous n'êtes pas autorisé a consulter cette page. Si vous pensez qu'il s'agit d'un erreur, contactez le(a) développeur(euse).";
        include'templates/pages/error.php';
    }