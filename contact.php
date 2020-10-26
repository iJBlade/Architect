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

/* *************************** * Programmation * *************************** */

include 'templates/pages/contact.php';
