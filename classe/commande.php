<?php 

class commande{

    // attributs
    protected $id;
    protected $nom;
    protected $email;
    protected $adresse;
    protected $prix;

/***************************** * getter * *************************************/
    function getId() {
        return $this->id;
    }
    function getNom() {
        return $this->nom; 
    }
    function getEmail() {
        return $this->email;
    }
    function getAdresse() {
        return $this->adresse;
    }
    function getPrix(){
        return $this->prix;
    }

/***************************** * setter * *************************************/
    function setId($id): void {
        $this->id = $id;
    }
    function setNom($nom): void {
        $this->nom = $nom;
    }
    function setEmail($email): void {
        $this->email = $email;
    }
    
    function setAdresse($adresse): void {
        $this->adresse = $adresse;
    }      
    function setPrix($prix): void {
        $this->prix = $prix;
    }    
/********************************constructeur**********************************/
    public function __construct($id = null) {
        //Rôle : initialiser l'objet après new
    //Retour : néant 
    //Paramètre : si $id présent, alors id de l'user à charger
        $this->id = "";
        $this->nom = "";
        $this->email = "";
        $this->adresse= "";  
        $this->prix = "";
           
        if(! is_null($id)){
            // si l'id n'est pas null
            $this->loadById($id);
            // alors on charge l''id concerné
        }
    } 
/********************************loadById**************************************/
    public function loadById($id) {
        // Rôle : chargement attributs dont la clé primaire est $id
    // retour : true si on a réussi à charger, false sinon
    // Paramètres : - $id : clé primaire à rechercher
        global $bdd;
        $sql= "SELECT * FROM `commande` WHERE `id` = :id";
            $req = $bdd->prepare($sql); 
        $codeRetour = $req->execute( [ ":id" =>$id ]); 	
        $ligne = $req->fetch(PDO::FETCH_ASSOC); // On récupère la première ligne 
        // Si elle n'existe pas 
        if ($ligne === false){
            echo "Commande $id non trouvé <br>";	    
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
        if(isset($tab['nom'])){
            $this->setNom($tab["nom"]);
        }
        if(isset($tab["email"])){
            $this->setEmail($tab["email"]);
        }
        if(isset($tab["adresse"])){
            $this->setAdresse($tab["adresse"]);
        }    
        if(isset($tab["prix"])){
            $this->setPrix($tab["prix"]);
        } 
    }
/*************************************Insert ************************************ */    
    public function insert(){
        // Rôle : insérer un commande dans la base de donnée
        // Paramètre : néant
        // Retour : true si réussi, false sinon
        
        // j'apelle ma base de donné 
        global $bdd;
        //je construits mon chemin sql 
        $sql = "INSERT INTO `commande` SET `nom` = :nom, `email` = :email, `adresse` =:adresse, `prix` =:prix ";
        $req = $bdd->prepare($sql);
        if ($req->execute( [    ":nom" => $this->nom,
                                ":email"=> $this->email,
                                ":prix" => $this->prix,
                                ":adresse"=> $this->adresse ] ) === false) {
            echo "Erreur requête : $sql";
            return false;
        }else{
            return true;
        }	        
    }      


}