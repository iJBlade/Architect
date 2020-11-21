<?php 


/* Classe categorie le site drop shipping de Marie*/
class categories {
    //attribut    
    protected $id;
    protected $titre;

/***************************** * getter * *************************************/

    function getId() {
        return $this->id;
    }
    function getTitre() {
        return $this->titre;
    }
/***************************** * setter * *************************************/
    function setId($id): void {
        $this->id = $id;
    }
    function setTitre($titre): void {
        $this->titre = $titre;
    }
/********************************constructeur**********************************/
    public function __construct($id = null) {
        //Rôle : initialiser l'objet après new
	//Retour : néant 
	//Paramètre : si $id présent, alors id de l'user à charger
        $this->id = "";
        $this->titre = "";              
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
        $sql= "SELECT * FROM `categories` WHERE `id` = :id";
            $req = $bdd->prepare($sql); 
        $codeRetour = $req->execute( [ ":id" =>$id ]); 	
        $ligne = $req->fetch(PDO::FETCH_ASSOC); // On récupère la première ligne 
        // Si elle n'existe pas 
        if ($ligne === false){
            echo "Catégorie $id non trouvé <br>";	    
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
            if(isset($tab['titre'])){
                $this->setTitre($tab["titre"]);
            }            
    }
    public function rechercheId($texte=''){
    	// Rôle : rechercher les id des categoriess pour les liens
	// Retour : l'id du categories concerné 
	// Paramètres : $texte : texte a rechercher dans la description	
        // Récupération de la base de données ouverte
        global $bdd;

        $sql = "SELECT * FROM `categories` WHERE `id` LIKE :texte " ;
        $req=$bdd->prepare($sql);
        if ( $req->execute([":texte" => "%$texte%"]) === false){
        echo "Erreur requête : $sql";
        return false;
        }	
        // $result[] pour recuperer les résultats
        $result=[];
        //$ligne = $req->fetch(PDO::FETCH_ASSOC);
        // si il y a une ligne a lire, fecth retourne le résultat. Peut-être fetchAll?	 
        while ($ligne = $req->fetch(PDO::FETCH_ASSOC)) {
                // Remplir le tableau Ã  partir de $ligne
                $categories = new categories();
                $categories->setId($ligne["id"]);
                $categories->setTitre($ligne["titre"]);        
        // $art->loadFromTab($ligne);//  le post pour afficher
            // la loadFromTab ne sert pas a grand chose car je lui demande d'initier deux fois un tableau
                $result[$ligne["id"]] = $categories;
        }	
        return $result;
 }   



}