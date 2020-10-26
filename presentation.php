<?php
/* ******** * Contrôleur pour mettre en ligne un article             * ****** */
/*            Param : - connecte return true else false    
              Côté ADMIN et CLIENT
/* ***************** * Librairie classe et connexion * ********************** */
include 'lib/init.php';
session_start();
/* ******************************** * Programme * **************************** */
if(estConnecte()){
    $id=$_SESSION["id"];
    $user = new admin($id);
}else{
    $id= "1";
    $user= new admin($id);
}
include "templates/pages/presentation.php";