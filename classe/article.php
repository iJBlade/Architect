<?php

/* Classe portfolio le site drop shipping de Marie*/
class article {
    //attribut    
    protected $id;
    protected $titre;
    protected $contenu;
    protected $contenu2;
    protected $contenu3;
    protected $contenu4;
    protected $statut_article;

/***************************** * getter * *************************************/

    function getId() {
        return $this->id;
    }
    function getTitre() {
        return $this->titre;
    }
    function getContenu() {
        return $this->contenu;
    }
    function getContenu2() {
        return $this->contenu2;
    }
    function getContenu3() {
        return $this->contenu3;
    }
    function getContenu4() {
        return $this->contenu4;
    }
    function getStatut_article() {
        return $this->statut_article;
    }
/***************************** * setter * *************************************/
    function setId($id): void {
        $this->id = $id;
    }
    function setTitre($titre): void {
        $this->titre = $titre;
    }
    function setContenu($contenu): void {
        $this->contenu = $contenu;
    }
    function setContenu2($contenu2): void {
        $this->contenu2 = $contenu2;
    }
    function setContenu3($contenu3): void {
        $this->contenu3 = $contenu3;
    }
    function setContenu4($contenu4): void {
        $this->contenu4 = $contenu4;
    }    
    function setStatut_article($statut_article): void {
        $this->statut_article = $statut_article;
    }       
/********************************constructeur**********************************/
    public function __construct($id = null) {
        //Rôle : initialiser l'objet après new
	//Retour : néant 
	//Paramètre : si $id présent, alors id de l'user à charger
        $this->id = "";
        $this->titre = "";
        $this->contenu = "";
        $this->contenu2 = "";
        $this->contenu3 = "";
        $this->contenu4 = "";
        $this->statut_article= "";               
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
        $sql= "SELECT * FROM `article` WHERE `id` = :id";
            $req = $bdd->prepare($sql); 
        $codeRetour = $req->execute( [ ":id" =>$id ]); 	
        $ligne = $req->fetch(PDO::FETCH_ASSOC); // On récupère la première ligne 
        // Si elle n'existe pas 
        if ($ligne === false){
            echo "Article $id non trouvé <br>";	    
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
            if(isset($tab["contenu"])){
                $this->setContenu($tab["contenu"]);
            }
            if(isset($tab["contenu2"])){
                $this->setContenu2($tab["contenu2"]);
            }
            if(isset($tab["contenu3"])){
                $this->setContenu3($tab["contenu3"]);
            }
            if(isset($tab["contenu4"])){
                $this->setContenu4($tab["contenu4"]);
            }
            if(isset($tab["statut_article"])){
                $this->setStatut_article($tab["statut_article"]);
            }        
       
    }

    public function insert(){
        // Rôle : insérer un article dans la base de donnée
        // Paramètre : néant
        // Retour : true si réussi, false sinon
        
        // j'apelle ma base de donné 
        global $bdd;
        //je construits mon chemin sql 
        $sql = "INSERT INTO `article` SET `titre` = :titre, `contenu` = :contenu, `contenu2` =:contenu2, `contenu3` =:contenu3, `contenu4` =:contenu4, `statut_article` =:statut_article ";
        $req = $bdd->prepare($sql);
        if ($req->execute( [    ":titre" => $this->titre,
                                ":contenu"=> $this->contenu,
                                ":contenu2"=> $this->contenu2,
                                ":contenu3"=> $this->contenu3,
                                ":contenu4"=> $this->contenu4,
                                ":statut_article"=> $this->statut_article] ) === false) {
            echo "Erreur requête : $sql";
            return false;
        }else{
            return true;
        }	        
    }            
        
    public function modifier(){
        //Rôle : modifier un article dans la base de donnée
        //Paramètre : néant
        // Retour : true si réussi, false sinon 
        
        global $bdd;
        $sql = "UPDATE `article` SET `titre` = :titre, `contenu` = :contenu, `contenu2` =:contenu2, `contenu3` =:contenu3, `contenu4` =:contenu4 WHERE article.id = :id";
        $req = $bdd->prepare($sql);
        if ($req->execute( [    ":id" => $this->id,
                                ":titre" => $this->titre,
                                ":contenu"=> $this->contenu,
                                ":contenu2"=> $this->contenu2,
                                ":contenu3"=> $this->contenu3,
                                ":contenu4"=> $this->contenu4,] ) === false) {
            echo "Erreur requête : $sql";
            return false;
        }else{
            return true;
        }
    }    
    public function modifierStatut(){
        //Rôle : modifier un article dans la base de donnée
        //Paramètre : néant
        // Retour : true si réussi, false sinon 
        
        global $bdd;
        $sql = "UPDATE `article` SET `statut_article` = :statut_article WHERE article.id = :id";
        $req = $bdd->prepare($sql);
        if ($req->execute( [ ":statut_article"=> 1 ] ) === false) {
            echo "Erreur requête : $sql";
            return false;
        }else{
            return true;
        }
    }    
  
    public function supprimer(){
        //Rôle : supprimer un article dans la base de donnée
        //Paramètre : néant
        //Retour : true si réussi, false sinon
        
        global $bdd;        
        $sql= "DELETE FROM `article` WHERE `id` =:id";
        $req = $bdd->prepare($sql);
        if($req->execute(["id" => $this->id]) === false){
            echo "Erreur requête : $sql";
            return false;
            }        
    }
    
    
    public function recherche(){
    	// Rôle : rechercher les id des articles
	// Retour : l'id du chapitre concerné 
	// Paramètres : néant
        // Récupération de la base de données ouverte
        global $bdd;

        $sql = "SELECT * FROM article WHERE `statut_article` = 1  ORDER BY article.id desc " ;
	$req=$bdd->prepare($sql);
	if ( $req->execute([":id" => $this->id]) === false){
	   echo "Erreur requête : $sql";
	   return false;
	}	
	// $result[] pour recuperer les résultats
	$result=[];
	//$ligne = $req->fetch(PDO::FETCH_ASSOC);
	// si il y a une ligne a lire, fecth retourne le résultat. Peut-être fetchAll?	 
	 while ($ligne = $req->fetch(PDO::FETCH_ASSOC)) {
            // Remplir le tableau Ã  partir de $ligne
            $article = new article();
            $article->loadFromTab($ligne);           
            $result[$ligne["id"]] = $article;
	 }	
	 return $result;
 }           
    public function rechercheNo_online(){
        // Rôle : rechercher les id des articles
    // Retour : l'id du chapitre concerné 
    // Paramètres : néant
        // Récupération de la base de données ouverte
        global $bdd;

        $sql = "SELECT * FROM article WHERE `statut_article` = 0  ORDER BY article.id desc " ;
        $req=$bdd->prepare($sql);
        if ( $req->execute([":id" => $this->id]) === false){
        echo "Erreur requête : $sql";
        return false;
        }	
        // $result[] pour recuperer les résultats
        $result=[];
        //$ligne = $req->fetch(PDO::FETCH_ASSOC);
        // si il y a une ligne a lire, fecth retourne le résultat. Peut-être fetchAll?	 
        while ($ligne = $req->fetch(PDO::FETCH_ASSOC)) {
                // Remplir le tableau Ã  partir de $ligne
                $article = new article();
                $article->loadFromTab($ligne);           
                $result[$ligne["id"]] = $article;
        }	
        return $result;
    }       
    public function rechercheDetail(){
    	// Rôle : rechercher les id des articles
	// Retour : l'id du chapitre concerné 
	// Paramètres : néant
        // Récupération de la base de données ouverte
        global $bdd;

        $sql = "SELECT * FROM article WHERE `id` =:id  " ;
	$req=$bdd->prepare($sql);
	if ( $req->execute([":id" => $this->id]) === false){
	   echo "Erreur requête : $sql";
	   return false;
	}	
	// $result[] pour recuperer les résultats
	$result=[];
	//$ligne = $req->fetch(PDO::FETCH_ASSOC);
	// si il y a une ligne a lire, fecth retourne le résultat. Peut-être fetchAll?	 
	 while ($ligne = $req->fetch(PDO::FETCH_ASSOC)) {
            // Remplir le tableau Ã  partir de $ligne
            $article = new article();
            $article->loadFromTab($ligne);           
            $result[$ligne["id"]] = $article;
	 }	
	 return $result;
 }       
 public function select(){
    // role : séléctionner l'id d'une fiche conseil 
       global$bdd;    
       $sql = "SELECT LAST_INSERT_ID() FROM article WHERE `id` =:id  " ;
       $req=$bdd->prepare($sql);
            if ($req->execute( [":id" => $this->id] ) === false){
               echo "Erreur requête : $sql";
                return false;
       }else{
       return true;
       }	
    	// $result[] pour recuperer les résultats
	$result=[];
	//$ligne = $req->fetch(PDO::FETCH_ASSOC);
	// si il y a une ligne a lire, fecth retourne le résultat. Peut-être fetchAll?	 
	 while ($ligne = $req->fetch(PDO::FETCH_ASSOC)) {
            // Remplir le tableau Ã  partir de $ligne
            $article = new article();
            $article->loadFromTab($ligne);           
            $result[$ligne["id"]] = $article;
	 }	
	 return $result;
    
}



}