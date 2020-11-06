<?php
/* ******** * Contrôleur pour afficher la page de modification * ************* */
/*            Param : si est connecte true, sinon false     
              Côté ADMIN
/* ***************** * Librairie classe et connexion * ********************** */
  include 'lib/init.php';  
  session_start();  
/****************** * Programmation * *************************************** */ 
  if(estConnecte()){
    $id= $_SESSION["id"];
    $user = new admin($id);
      if(isset($_GET['id'])){
          $linkID=$_GET['id']; // $id de l'article détaillé en URL
          $article= new article($linkID);//construct cherche la correspondance
          $article->loadFromTab($_POST);
          $lignes=$article->rechercheDetail($linkID);
          //$article->modifier($linkID);
      }
      if(isset($_GET['prod'])){
        $linkProduit = $_GET['prod'];
        $produit= new produit($linkProduit);//construct cherche la correspondance
        $produit->loadFromTab($_POST);
        $ligne=$produit->rechercheDetail($linkProduit);

      }
    include'templates/pages/update.php';

  }else{
    $message = "Si vous n'êtes pas un(e) administrateur(trice), vous n'êtes pas autorisé à consulter cette page. Si vous pensez qu'il s'agit d'un erreur, contactez le(a) développeur(euse).";
    include'templates/pages/error.php';
  }
