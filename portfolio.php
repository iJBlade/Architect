<?php
/* ******** * Contrôleur pour appeler la liste d'article crée * ************** */
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

    $article= new article();
    $article->loadFromTab($_POST);
    $lignes=$article->recherche();  
    include 'templates/pages/portfolio.php';
