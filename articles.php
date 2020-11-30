<?php
/* ******** * Contrôleur pour appeler la liste d'articles crée * ************** */
/*            Param : - Présentation en ligne && hors ligne
                      - Si connecter, on déclare variable user, sinon rien  
              Côté. : - Admin & Client
/* ***************** * Librairie classe et connexion * ********************** */

include 'lib/init.php';
session_start();

/* ******************************** * Programme * **************************** */

if(estConnecte()){
        $id = $_SESSION["id"]; 
        $user = new admin($id);
    }else{

    }

    $chronique= new chronique();
    $chronique->loadFromTab($_POST);
    $lignes=$chronique->recherche();  
    // pour les catégories de chaque article 
    $texte = empty($_GET["categorie"]) ? "" : $_GET["categorie"];
    $ligne=$chronique->chroniqueCategorie($texte); 
    include 'templates/pages/chroniques.php';
