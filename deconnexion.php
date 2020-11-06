<?php
/* ******** * Contrôleur pour afficher home pour deconnecte l'admin * ******** */
/*            Param : deconnecte() -> fonction de la lib/init.php             */
/*            View = Côté Admin                                               */        
/* ***************** * Librairie classe et connexion * ********************** */
    include 'lib/init.php';  
    session_start();

/****************** * Programmation * *************************************** */ 

deconnecte();

if(estConnecte()){   
    include 'templates/pages/home.php';
}else{
    include 'templates/pages/home.php';
}
