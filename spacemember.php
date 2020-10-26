<?php
/* ******** * Contrôleur pour afficher les articles EN COURS DE CREA * ****** */
/*            Param : - connecte return true else false    
              Côté ADMIN
/* ***************** * Librairie classe et connexion * ********************** */
    include 'lib/init.php';
    session_start();
/* ****************** * Déclaration des variables * ************************* */

$user = new admin();
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";

/* ***************************************************************************** */
    if(estConnecte()){
        $id=$_SESSION['id'];
        $user = new admin($id);
        include 'templates/pages/spacemember.php';
    }elseif($user->verifie($email,$password)){
        connecte($user);
        // si l'user est connecté je le dirige à nouveau vers l'accueil
        include 'templates/pages/spacemember.php';
    }else{
        $erreur="<div style='color:#770e0e;'>Erreur d'authentification</div> ";
        include 'templates/pages/login.php';

    }

