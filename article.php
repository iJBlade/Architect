<?php
/* ******** * Contrôleur pour afficher le detail d'un article * ************* */
/*            Param : - récupéré l'id de l'article a affiché     
              Côté client
/* ***************** * Librairie classe et connexion * ********************** */
    include 'lib/init.php';  
    session_start();

      if(estConnecte()){
        $id= $_SESSION["id"];
        $user = new admin($id);
      }else{

      }   
/* **************** * Déclaraton des variables * **************************** */
  
    $linkID=$_GET['id']; // $id de l'article détaillé en URL

/****************** * Programmation * *************************************** */ 
    if(isset($_GET['id'])){
        /* *** * Affichage de l'article détaillé *** */ 
          $chronique= new chronique($linkID);//construct cherche la correspondance
          $chronique->loadFromTab($_POST);
          $lignes=$chronique->rechercheDetail($linkID);
          include'templates/pages/chronique.php';
      }
