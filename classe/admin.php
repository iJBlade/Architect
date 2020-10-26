<?php

/* Classe administrateur pour le site drop shipping de Marie*/
class admin {
    //attributs    
    protected $id;
    protected $email;
    protected $password;
    protected $titre;
    protected $presentation1;
    protected $presentation2;
/* ************************ * getter * ************************************** */    
    function getId() {
        return $this->id;
    }
    function getEmail() {
        return $this->email;
    }
    function getPassword() {
        return $this->password;
    }
    function getTitre() {
        return $this->titre;
    }
    function getPresentation1() {
        return $this->presentation1;
    }
    function getPresentation2() {
        return $this->presentation2;
    }    
/* ************************ * setter * ************************************** */    
    function setId($id): void {
        $this->id = $id;
    }
    function setEmail($email): void {
        $this->email = $email;
    }
    function setPassword($password): void {
        $this->password = $password;
    }
    function setTitre($titre): void {
        $this->titre = $titre;
    }
    function setPresentation1($presentation1): void {
        $this->presentation1 = $presentation1;
    }
    function setPresentation2($presentation2): void {
        $this->presentation2 = $presentation2;
    }
/********************************constructeur**********************************/
    public function __construct($id = null) {
        //Rôle : initialiser l'objet après new
	//Retour : néant 
	//Paramètre : si $id présent, alors id de l'user à charger
        $this->id = "";
        $this->email = "";
        $this->password = "";
        $this->titre = "";
        $this->presentation1= "";
        $this->presentation2= "";
                
        if(! is_null($id)){
            // si l'id n'est pas null
            $this->loadById($id);
            // alors on charge l'id concerné
        }
    }
/********************************loadById**************************************/
     public function loadById($id) {
      	// Rôle : chargement attributs dont la clé primaire est $id
	// retour : true si on a réussi à charger, false sinon
	// Paramètres : - $id : clé primaire à rechercher
    	global $bdd;
	$sql= "SELECT * FROM `admin` WHERE `id` = :id";
        $req = $bdd->prepare($sql); 
	$codeRetour = $req->execute( [ ":id" =>$id ]); 	
	$ligne = $req->fetch(PDO::FETCH_ASSOC); // On récupère la première ligne 
	// Si elle n'existe pas 
	if ($ligne === false){
	    echo "Utilisateur/trice $id inexistant(e) <br>";	    
	    return false ;
	}	
	// Notre ligne est valide 
	return $this->loadFromTab($ligne);	    
    }  
/*********************************loadFromTab**********************************/
    public function loadFromTab($tab){
	// Rôle : changer la valeur de plusieurs attributs en même temps 
	// Paramètre : $tab qui comporte un tableau
	// Retour : néant
        if(isset($tab["id"])){
            // je retourne la valeur du prénom
            $this->setId($tab["id"]);
        }	       
        // la variable $tab comporte prenom alors	
        if(isset($tab["email"])){
            // je retourne la valeur du prénom
            $this->setEmail($tab["email"]);
        }
        if(isset($tab["password"])){
            // je retourne la valeur du prénom
            $this->setPassword($tab["password"]);
        }
        if(isset($tab["titre"])){
            // je retourne la valeur du prénom
            $this->setTitre($tab["titre"]);
        }	       
        // la variable $tab comporte prenom alors	
        if(isset($tab["presentation1"])){
            // je retourne la valeur du prénom
            $this->setPresentation1($tab["presentation1"]);
        }
        if(isset($tab["presentation2"])){
            // je retourne la valeur du prénom
            $this->setPresentation2($tab["presentation2"]);
        }    

    }
/*********************************verifLogin***********************************/
    
    public function verifie($email,$password){
	 //Rôle : vérifier que pseudo et mdp correspondent bien  
         //Retour :true ou false 
         //Paramètre :    $pseudo et $password d'ailleurs
        global$bdd;    
        $sql = $sql= "SELECT * FROM `admin` WHERE `email` = :email " ;
        $req=$bdd->prepare($sql);
             if ($req->execute( [":email" => $email] ) === false){
                echo "Erreur requête : $sql";
                 return false;
            }	
       // fetch permet de lire la première ligne
        $ligne = $req->fetch(PDO::FETCH_ASSOC);       
        // Si il n'y a pas de résultat, pas d'user avec ce pseudo
        if ($ligne === false) {
            return false;
        }              
        // si on trouve, on compare
        if ($ligne["password"] === $password ) {
            // on a trouvé donc retourne le resultat
            $this->loadFromTab($ligne);
            return true;
        } else {
            // si ça correspond pas on retourne false 
            return false;
        }
	
    }
    
    public function update(){
            //Rôle : modifier le profil de l'admin connecté dans la base de données 
            //Param : rien
            //Retour : true si réussi, false sinon 
            
            //j'apelle ma base de données
            global $bdd;
            //je construits mon chemin sql 
            $sql = "UPDATE `admin` SET `email` = :email, `password` = :password WHERE admin.id = :id";
            $req = $bdd->prepare($sql);
            if ($req->execute( [    ":id" => $this->id,
                                    ":email" => $this->email,
                                    ":password"=> $this->password] ) === false) {
                echo "Erreur requête : $sql";
                return false;
        }else{
            return true;
        }	        
    }
    
    public function updateInfo(){
            //Rôle : modifier le profil de l'admin connecté dans la base de données 
            //Param : rien
            //Retour : true si réussi, false sinon 
            
            //j'apelle ma base de données
            global $bdd;
            //je construits mon chemin sql 
            $sql = "UPDATE `admin` SET `titre` = :titre, `presentation1` = :presentation1 , `presentation2` = :presentation2 WHERE admin.id = :id";
            $req = $bdd->prepare($sql);
            if ($req->execute( [    ":id" => $this->id,
                                    ":titre" => $this->titre,
                                    ":presentation1" => $this->presentation1,
                                    ":presentation2"=> $this->presentation2] ) === false) {
                echo "Erreur requête : $sql";
                return false;
        }else{
            return true;
        }	

    }


















    
}
