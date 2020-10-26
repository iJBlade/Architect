<?php
/* ******** * Contrôleur pour mettre en ligne un article             * ****** */
/*            Param : - connecte return true else false    
              Côté ADMIN
/* ***************** * Librairie classe et connexion * ********************** */
include 'lib/init.php';
        
$id=$_GET['id']; // $id de l'article détaillé en URL
$statut = 0 ;
$sql= "UPDATE `article` SET `statut_article` = $statut WHERE article.id = $id";
$req = $bdd->prepare($sql);
$req->execute();

$id_prod=$_GET["prod"];
$sql2= "UPDATE `produit` SET `statut` = $statut WHERE produit.id = $id_prod";
$req2 = $bdd->prepare($sql2);
$req2->execute();

header("Location:dashboard.php");
