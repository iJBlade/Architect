<?php
/* ******** * Contrôleur pour modifier un article                    * ****** */
/*            Param : - connecte return true else false    
                      - $_GET selon le produit ou l'article à modifier
              Côté ADMIN
/* ***************** * Librairie classe et connexion * ********************** */
  include 'lib/init.php';
  session_start();
/* ************************************************************************** */

    if(estConnecte()){
        // param de l'admin
        $id=$_SESSION["id"];
        $user = new admin($id);  

        if(isset($_GET['id'])){
          /* *** * Affichage de l'article détaillé *** */ 
          $linkID = $_GET["id"];
          $article= new article($linkID);//construct cherche la correspondance
          $article->loadFromTab($_POST);
          $article->modifier($linkID);           
        }

        if(isset($_GET['prod'])){
          /* *** * Affichage de l'article détaillé *** */ 
          $linkProd = $_GET["prod"];
          $produit= new produit($linkProd);//construct cherche la correspondance
          $produit->loadFromTab($_POST);
          $produit->modifier($linkProd);    
          header("Location: update_art.php?prod= <?= $linkProd ?>");       
        }
    }else{
        $message = "Si vous n'êtes pas un(e) administrateur(trice), vous n'êtes pas autorisé a consulter cette page. Si vous pensez qu'il s'agit d'un erreur, contactez le(a) développeur(euse).";
        include'templates/pages/error.php';  
    }