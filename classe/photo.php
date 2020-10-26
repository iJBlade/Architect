<?php

/* Classe photo du site de drop shipping*/
class photo {
    //attributs
    protected $id;
    protected $taille; // taille de l'image
    protected $nom; // nom de l'image
    protected $type; // type de l'image (jpg, png ect..)
    protected $bin; // image elle-même
    protected $id_article;// clé primaire de la table article 
/*********************************getter***************************************/    
    function getId() {
        return $this->id;
    }
    function getTaille() {
        return $this->taille;
    }
    function getNom() {
        return $this->nom;
    }
    function getType() {
        return $this->type;
    }
    function getBin() {
        return $this->bin;
    }    
    function getId_article() {
        return $this->id_article;
    }
/*********************************setter***************************************/    
    function setId($id): void {
        $this->id = $id;
    }
    function setTaille($taille): void {
        $this->taille = $taille;
    }
    function setNom($nom): void {
        $this->nom = $nom;
    }
    function setType($type): void {
        $this->type = $type;
    }
    function setBin($bin): void {
        $this->bin = $bin;
    }    
    function setId_article($id_article): void {
        $this->id_article = $id_article;
    }
/********************************constructeur**********************************/

    public function __construct($id = null) {
        $this->id = "";
        $this->taille = "";
        $this->nom = "";
        $this->type = "";
        $this->id_article = "";
        $this->bin= "";
        
        if(! is_null($id)){
            // si l'id n'est pas null
            $this->loadById($id);
            // alors on charge l''id concerné
        }
}
/*****************************loadById*****************************************/
    public function loadById($id) {
      	// Rôle : chargement des attributs depuis la ligne de la base de données dont la clé primaire est $id
	// retour : true si on a réussi à charger, false sinon
	// Paramètres : 
	// $id : clé primaire à rechercher
	// charger les infos de la table commentaire
    	global $bdd;
        $sql= "SELECT * FROM `photo` WHERE `id` = :id";
        $req = $bdd->prepare($sql); 
        $codeRetour = $req->execute( [ ":id" =>$id ]); 	
        $ligne = $req->fetch(PDO::FETCH_ASSOC); // On récupère la première ligne 

        if ($ligne === false){
            echo "Photo numéro $id non trouvé <br>";	    
            return false ;
        }	
        // Notre ligne est valide 
        return $this->loadFromTab($ligne);	    
}
/*********************************loadFromTab**********************************/
    public function loadFromTab($tab){
	// Rôle : changer la valeur de plusieurs attributs en même temps 
	// Paramètre : $tab qui comporte un tableau de setter
	// Retour : néant
        if(isset($tab["id"])){
            // je retourne la valeur du prénom
            $this->setId($tab["id"]);
        }	       
        // la variable $tab comporte prenom alors	
        if(isset($tab["taille"])){
            // je retourne la valeur du prénom
            $this->setTaille($tab["taille"]);
        }
        if(isset($tab["nom"])){
            // je retourne la valeur du prénom
            $this->setNom($tab["nom"]);
        }   
        if(isset($tab["type"])){
            // je retourne la valeur du prénom
            $this->setType($tab["type"]);
        }        
        if(isset($tab["bin"])){
            // je retourne la valeur du prénom
            $this->setBin($tab["bin"]);
        }                  
        if(isset($tab["id_article"])){
            // je retourne la valeur du prénom
            $this->setId_article($tab["id_article"]);
        }        
    }   

    public function select($texte){
           //Rôle :rechercher les photos par article
           //Param : $texte, correspondance avec $_GET du controleur 
           //Retour : liste d'article par region 
           //j'appel ma base de donnée 
            global $bdd;
           //je construits mon chemin sql 
           $sql = "SELECT * FROM photo WHERE id_article LIKE :texte";
           $req = $bdd->prepare($sql);
           if ( $req->execute([":texte" => "%$texte%"]) === false){
              echo "Erreur requête : $sql";
              return false;
           }		// $result[] pour recuperer les résultats
           $result=[];	 
            while ($resultphoto = $req->fetch(PDO::FETCH_ASSOC)) {
               // Remplir le tableau Ã  partir de $ligne
               $photo = new photo();
               $photo->loadFromTab($resultphoto);   
               $result[$resultphoto["id"]] = $photo;
            }	
            return $result;	        
       } 

}
