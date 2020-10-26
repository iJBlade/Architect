<?php
include'lib/init.php';
session_start();
// pour l'article principale
$linkProduit = $_GET["id"];
$select = $bdd->prepare("SELECT * FROM produit WHERE id = $linkProduit");
$select->execute();

// pour la section vous devriez aussi aimer 
$prod = new produit();
$ligne1=$prod->cat1();

include "templates/pages/shopping.php";