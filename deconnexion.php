<?php

/* 
 *  Controleur qui sert a apeller la page d'acceuil et déconnecter l'admin 
 */
include'lib/init.php';

session_start();
deconnecte();

if(estConnecte()){   
    include 'templates/pages/home.php';
}else{
    include 'templates/pages/home.php';
}
