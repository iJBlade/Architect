<?php 
/* ******** * Contrôleur pour afficher le formulaire de connexion     * ****** */
/*            Param : -  return true else false    
              Côté ADMIN
/* ***************** * Librairie classe et connexion * ********************** */
    include 'lib/init.php';
    session_start();
/* ************************************************************************** */
    unset($_SESSION['recup_mail']); // vider les adresses mails déja enregistrer
    $user = new admin();
    
include'templates/pages/login.php';