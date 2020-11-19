<?php 
/* ******** * Contrôleur pour traiter l'ajout d'un article * **************** */
/*            Param : - Ajout d'un produit et d'un article, double controleur
                      - Si connecter, on ajoute, sinon page error ( pour eviter
                      tentative d'intrusion)  
              Côté. : - Admin
/* ***************** * Librairie classe et connexion * ********************** */

    include'lib/init.php';
    session_start();  

/******************* Programme pour ajouter l'article *********************** */
    if(estConnecte()){

        if(isset($_POST['Ajouter'])){
            $article =  new article();
            $article->loadFromTab($_POST);
            $article->insert();            
            header("Location:dashboard.php");
        }
        if(isset($_POST['Ajouter_product'])){
            // déclaration des variables pour la tva 
            $prix = $_POST["prix"];
            $tva = $_POST["tva"];
            $final =$_POST["final_prix"];
            $final = $prix + $prix*$tva/100;    
            $produit =  new produit();
            $produit->loadFromTab($_POST); // charger les données
            $produit->insert($prix,$tva,$final);            
            header("Location:dashboard.php");
        }
        if(isset($_POST['Ajouter_chronique'])){
            $chronique =  new chronique();
            $chronique->loadFromTab($_POST); // charger les données
            $chronique->insert();            
            header("Location:dashboard.php");
        }
    }else{
        include "templates/pages/error.php";
    }