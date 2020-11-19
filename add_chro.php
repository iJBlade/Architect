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

        if(isset($_POST['Ajouter_chronique'])){
            $chronique =  new chronique();
            $chronique->loadFromTab($_POST); // charger les données
            $chronique->insert();            
          
        }
    }