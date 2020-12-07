<?php
/* ******** * Contrôleur pour appeler la commande finalisé du client * ************** */
/*            Param : - Présentation en ligne && hors ligne
                      - Si connecter, on déclare variable user, sinon rien  
              Côté. : - Admin & Client
/* ***************** * Librairie classe et connexion * ********************** */

include 'lib/init.php';
session_start();

/* ******************************** * Programme * **************************** */
//unset($_SESSION['panier']); pas tout de suite ;

$commande = new commande();
$commande->loadFromTab($_POST);
$commande->insert();

include 'templates/pages/commande.php';
