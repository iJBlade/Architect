<?php
/* ******** * Contrôleur pour afficher et traiter la page de paiement      * ****** */
/*            Param : - connecte return true else false 
                      - $_GET -> en fonction du produit ou de l'article  
              Côté ADMIN
/* ***************** * Librairie classe et connexion * ********************** */
    include 'lib/init.php';
    session_start();
/****************** * Programmation * *************************************** */ 

include "templates/pages/payment.php";