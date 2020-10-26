<?php
/* ******** * Contrôleur pour modifier un article                    * ****** */
/*            Param : - connecte return true else false    
              Côté ADMIN
/* ***************** * Librairie classe et connexion * ********************** */
  include 'lib/init.php';
  session_start();
/* ************************************************************************** */
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
      }

