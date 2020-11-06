<?php
    /* ******** * Contrôleur pour afficher lapage d'accueil * ******** */
    /*            Param : connecte(), true else return non connecte    */
    /*            View = Côté Admin                                    */        
/* ***************** * Librairie classe et connexion * ********************** */
    include 'lib/init.php';  
    session_start();

/****************** * Programmation * *************************************** */ 

    if(estConnecte()){
        $id=$_SESSION["id"];
        $user = new admin($id);  
        include'templates/pages/home.php';
    }else{
        include'templates/pages/home.php';
    }
