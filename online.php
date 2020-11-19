<?php
/* ******** * Contrôleur pour mettre en ligne un article/produit      * ****** */
/*            Param : - connecte return true else false 
                      - $_GET -> en fonction du produit ou de l'article  
              Côté ADMIN
/* ***************** * Librairie classe et connexion * ********************** */
    include 'lib/init.php';
    session_start();
/****************** * Programmation * *************************************** */ 
    if(estConnecte()){
            // récupération des infos de l'admin
                $id= $_SESSION["id"];
                $user = new admin($id);
            if(isset($_GET["id"])){
                $id=$_GET['id']; // $id de l'article détaillé en URL
                $statut = 1 ;
                $sql= "UPDATE `article` SET `statut_article` = $statut WHERE article.id = $id";
                $req = $bdd->prepare($sql);
                $req->execute();
                header("Location:dashboard.php");

            }
            if(isset($_GET["prod"])){
                $id_prod=$_GET["prod"];
                $statut = 1 ;
                $sql2= "UPDATE `produit` SET `statut` = $statut WHERE produit.id = $id_prod";
                $req2 = $bdd->prepare($sql2);
                $req2->execute();
                header("Location:dashboard.php");
            }
            if(isset($_GET["chronique"])){
                $statut = 1 ;
                $id_chronique=$_GET["chronique"];
                $sql3= "UPDATE `chronique` SET `statut_chronique` = $statut WHERE chronique.id = $id_chronique";
                $req3 = $bdd->prepare($sql3);
                $req3->execute();
                header("Location:dashboard.php");


            }



  

    }else{
        $message = "Si vous n'êtes pas un(e) administrateur(trice), vous n'êtes pas autorisé a consulter cette page. Si vous pensez qu'il s'agit d'un erreur, contactez le(a) développeur(euse).";
        include'templates/pages/error.php';
    }



