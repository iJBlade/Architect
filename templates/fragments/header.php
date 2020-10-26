<?php

/* 
 * Template de page :
 *      - header de toutes les pages
 * 
 *      - Paramètres (variables initialisées) : néant
 *        (on récupère les infos sur l'utilisateur connecté - ou pas - via la librairie de fonctions session.php
 * 
 */

// Si on n'est pas connecté, on affiche header1, si on n'est connecté, on affiche header2

if ( estConnecte() ) {
    include "templates/fragments/header_admin.php";    
} else {
    include "templates/fragments/header_client.php";
}
