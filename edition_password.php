<?php
/* ******** * Contrôleur pour modifier le mot de passe de l'admin* ************* */
/*            Param : - connecte return true else false    
              Côté ADMIN
/* ***************** * Librairie classe et connexion * ********************** */
    include 'lib/init.php';
    session_start();
/* ************************************************************************** */
    if(estConnecte()){     
        $id=$_SESSION["id"];
        $user = new admin($id);   

        if(!empty($_POST["password"]) AND !empty($_POST["password_confirm"])){
            if($_POST["password"] !== $_POST["password_confirm"]){

            }else{
            $user->loadFromTab($_POST);
            $user->update(); 
            $user->loadFromTab($_POST);
            }
        }else{

        }
    }else{
        $message = "Si vous n'êtes pas un(e) administrateur(trice), vous n'êtes pas autorisé a consulter cette page. Si vous pensez qu'il s'agit d'un erreur, contactez le(a) développeur(euse).";
        include'templates/pages/error.php';        
    }