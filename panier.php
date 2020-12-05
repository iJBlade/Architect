<?php
/* ******** * Contrôleur pour afficher le panier et le mettre à jour      * ****** */
/*            Param : - connecte return true else false 
                      - $l,$p,$q,$f    
              Retour : affichage / modification du panier         
              Côté ADMIN
/* ***************** * Librairie classe et connexion * ********************** */
   include 'lib/init.php';
   session_start();
/****************** * Programmation * *************************************** */ 


$erreur = false;

$action = (isset($_POST['action'])? $_POST['action']:  (isset($_GET['action'])? $_GET['action']:null )) ;
if($action !== null)
{
   if(!in_array($action,array('ajout', 'suppression', 'refresh')))
   $erreur=true;

   //récupération des variables en POST ou GET
   $l = (isset($_POST['l'])? $_POST['l']:  (isset($_GET['l'])? $_GET['l']:null )) ;
   $p = (isset($_POST['p'])? $_POST['p']:  (isset($_GET['p'])? $_GET['p']:null )) ;
   $q = (isset($_POST['q'])? $_POST['q']:  (isset($_GET['q'])? $_GET['q']:null )) ;
   $f = (isset($_POST['f'])? $_POST['f']:  (isset($_GET['f'])? $_GET['f']:null )) ;

   //Suppression des espaces verticaux
   $l = preg_replace('#\v#', '',$l);
   $f = preg_replace('#\v#', '',$f);
   //On vérifie que $p est un float
   $p = floatval($p);
   //$p = number_format($p, 2);

   //On traite $q qui peut être un entier simple ou un tableau d'entiers
    
   if (is_array($q)){
      $QteArticle = array();
      $i=0;
      foreach ($q as $contenu){
         $QteArticle[$i++] = intval($contenu);
      }
   }
   else
   $q = intval($q);
    
}

if (!$erreur){
   switch($action){
      Case "ajout":
         ajouterArticle($l,$q,$p,$f);
         break;

      Case "suppression":
         supprimerArticle($l);
         break;

      Case "refresh" :
         for ($i = 0 ; $i < count($QteArticle) ; $i++)
         {
            modifierQTeArticle($_SESSION['panier']['titre'][$i],round($QteArticle[$i]));
         }
         break;

      Default:
         break;
   }
}
include 'templates/pages/panier.php';