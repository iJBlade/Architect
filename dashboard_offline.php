<?php
/* ******** * Contrôleur pour afficher le detail d'un article ou d'un produit * ************* */
/*            Param : - récupéré l'id de l'article EN COURS DE CREATION a affiché     
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
        }elseif(isset($_GET["prod"])){
            $linkProd=$_GET['prod']; // $id de l'article détaillé en URL
            $produit= new produit($linkProd);//construct cherche la correspondance
            $produit->loadFromTab($_POST);
            $result=$produit->rechercheDetail($linkProd);
        }elseif(isset($_GET["chronique"])){
            $linkChro=$_GET['chronique']; // $id de l'article détaillé en URL
            $chronique= new chronique($linkChro);//construct cherche la correspondance
            $chronique->loadFromTab($_POST);
            $resultat=$chronique->rechercheDetail($linkChro);
        }else{
            $message = "Erreur sur le chargement de l'article. Veuillez contactez le(a) développeur(euse).";
            include'templates/pages/error.php';

        }
        include'templates/pages/dashboard_offline.php';
    }else{
        $message = "Si vous n'êtes pas un(e) administrateur(trice), vous n'êtes pas autorisé a consulter cette page. Si vous pensez qu'il s'agit d'un erreur, contactez le(a) développeur(euse).";
        include'templates/pages/error.php';
    }


