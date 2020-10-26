<?php
/* ******** * Contrôleur pour mettre en ligne un article             * ****** */
/*            Param : - connecte return true else false    
              Côté ADMIN et CLIENT
/* ***************** * Librairie classe et connexion * ********************** */
include 'lib/init.php';
session_start();
/* ******************************** * Programme * **************************** */
$linkProduit = $_GET["id"];
$select = $bdd->prepare("SELECT * FROM produit WHERE id = $linkProduit");
$select->execute();

include "templates/pages/shop_produit.php";