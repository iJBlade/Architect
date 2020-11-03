<?php
/* ******** * Contrôleur pour afficher le tableau de bord * ************* */
/*            Param : Si il est connecté ok, sinon erreur , redirection login */
/*            View = Côté Admin                                               */        
/* ***************** * Librairie classe et connexion * ********************** */
    include 'lib/init.php';  
    session_start();
/* ****************** * Déclaration des variables * ************************* */

    $user = new admin();
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";

/****************** * Programmation * *************************************** */ 
    if(estConnecte()){
        $id= $_SESSION["id"];
        $user = new admin($id);
        // pour les articles
        $article= new article();
        $article->loadFromTab($_POST);
        $lignes=$article->recherche(); // affichage des articles en ligne
        $ligne=$article->rechercheNo_online(); // affichage des articles non en ligne
        // pour les produits
        $produit= new produit();
        $produit->loadFromTab($_POST);
        $result=$produit->recherche(); // affichage des produits en ligne
        $tab=$produit->rechercheNo_online(); // affichage des produits non en ligne
 
        // pour le compteur 
        $ip = $_SERVER['REMOTE_ADDR']; // l'adresse IP du visiteur
        $date = date('Y-m-d'); // la date d'aujourd'hui , sous le format AAAA-MM-JJ
        $sql= "INSERT INTO stats_visites (ip , date_visite , pages_vues) VALUES (:ip , :date , 1)
        ON DUPLICATE KEY UPDATE pages_vues = pages_vues + 1 ";
        $req = $bdd->prepare($sql);
        $req->execute(array( ':ip'   => $ip, ':date' => $date));       
        include "templates/pages/dashboard.php";
    }elseif($user->verifie($email,$password)){
        connecte($user);
                // pour les articles
                $article= new article();
                $article->loadFromTab($_POST);
                $lignes=$article->recherche(); // affichage des articles en ligne
                $ligne=$article->rechercheNo_online(); // affichage des articles non en ligne
                // pour les produits
                $produit= new produit();
                $produit->loadFromTab($_POST);
                $result=$produit->recherche(); // affichage des produits en ligne
                $tab=$produit->rechercheNo_online(); // affichage des produits non en ligne
         
                // pour le compteur 
                $ip = $_SERVER['REMOTE_ADDR']; // l'adresse IP du visiteur
                $date = date('Y-m-d'); // la date d'aujourd'hui , sous le format AAAA-MM-JJ
                $sql= "INSERT INTO stats_visites (ip , date_visite , pages_vues) VALUES (:ip , :date , 1)
                ON DUPLICATE KEY UPDATE pages_vues = pages_vues + 1 ";
                $req = $bdd->prepare($sql);
                $req->execute(array( ':ip'   => $ip, ':date' => $date));   
        // si l'user est connecté je le dirige à nouveau vers l'accueil
        include 'templates/pages/dashboard.php';
    }else{
        $erreur="<div style='color:#770e0e;'>Erreur d'authentification</div> ";
        include 'templates/pages/login.php';

    }
