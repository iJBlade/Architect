<?php
/* ******** * Contrôleur pour modifier le profil                     * ****** */
/*            Param : - connecte return true else false    
              Côté ADMIN
/* ***************** * Librairie classe et connexion * ********************** */
    include 'lib/init.php';
    session_start();
/* ************************************************************************** */

      if(estConnecte()){
        // param de l'admin
        $id= $_SESSION["id"];
        $user = new admin($id);
        $user->loadFromTab($_POST);
        $user->updateInfo();         
        header("Location: presentation.php");

    }else{
        $message = "Si vous n'êtes pas un(e) administrateur(trice), vous n'êtes pas autorisé a consulter cette page. Si vous pensez qu'il s'agit d'un erreur, contactez le(a) développeur(euse).";
        include'templates/pages/error.php';  
    }

