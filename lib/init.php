<?php
/* ************ * Code d'initialisation des tous les programmes * *********** */

/* ********************** * Affichage des erreurs * ************************* */
ini_set('display_errors',1);
error_reporting(E_ALL);
/* ********************** * Chargement des classes * ************************ */
include 'lib/connexion.php';
include 'lib/panier.php';
include 'classe/article.php';
include 'classe/admin.php';
include 'classe/photo.php';
include 'classe/produit.php';
/* ******************* * Connexion à la base de données * ******************* */
global $bdd; 
$bdd=new PDO("mysql:host=Localhost;dbname=marie;charset=UTF8","ines1","24051994"); 
$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING); 