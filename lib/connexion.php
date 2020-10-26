<?php

/* 
 * Fonctions de gestion de la session
 *
 */


function estConnecte() {
    // Rôle : indiqué si on est connecté
    // Retour : true si connecté, false sinon
    // Paramètres : néant
    
    if ( isset($_SESSION["connecte"]) and $_SESSION["connecte"] === true) {
        return true;
    } else {
    return false;
    }
}


function idUtilisateurConnecte() {
    // Rôle : donner l'id de l'utisateur connecté (0 sinon)
    // Retour:  id user ou 0
    // Paramètres : néant
    
    if (!estConnecte()) {
	return 0;
    }
    
    if ( isset($_SESSION["id"])) {
	return $_SESSION["id"];
    } else {
	return 0;
    }  
}


function utilisateurConnecte() {
    // Rôle : récupérer l'objet correspondant à l'utilisateur connecté
    // Retour : objet de la classe utilisateur chargé
    // Paramètres : néant
    
    // Récupérer la variable globale 
    global $user;
    
    if ( ! isset($user)) {
	// On ne l'a pas déjà chargé
	$user = new admin(idUtilisateurConnecte());
    }
    return $user;
}


function deconnecte() {
    // Rôle : déconnexion de l'utilisateur courant
    // Retour : néant
    // Paramètres : néant  
    $_SESSION["connecte"] = false;  
}


function connecte($user) {
    // Rôle : connecter un utilisateur
    // Retour : néant
    // Paramètres :
    //	    $utilisateur : objet utilisateur
    $_SESSION["id"]=$user->getId();
    $_SESSION["connecte"] = true;
    $_SESSION["user"] = $user->getId();
    $GLOBALS["user"] = $user;  
}

