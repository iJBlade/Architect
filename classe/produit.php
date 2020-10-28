<?php
/**Classe produit pour le site de drop shipping */
class produit{
    // déclaration des attributs
    protected $id;
    protected $categorie;
    protected $statut;
    protected $titre;
    protected $contenu;
    protected $contenu2;
    protected $prix;
    protected $tva;
    protected $stock;
    protected $final_prix;
/*********************************getter***************************************/    
    function getId() {
        return $this->id;
    }
    function getCategorie() {
        return $this->categorie;
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
    function getPrix() {
        return $this->prix;
    }
    function getTva() {
        return $this->tva;
    }
    function getStatut(){
        return $this->statut;
    }
    function getStock(){
        return $this->stock;
    }
    function getFinal_prix(){
        return $this->final_prix;
    }
/*********************************setter***************************************/    
    function setId($id){
        $this->id = $id;
    }
    function setCategorie($categorie){
        $this->categorie = $categorie;
    }
    function setTitre($titre){
        $this->titre = $titre;
    }
    function setContenu($contenu){
        $this->contenu = $contenu;
    }
    function setContenu2($contenu2){
        $this->contenu2 = $contenu2;
    }    
    function setPrix($prix){
        $this->prix = $prix;
    }
    function setTva($tva){
        $this->tva = $tva;
    }
    function setStatut($statut) {
        $this->statut = $statut;
    }
    function setStock($stock) {
        $this->stock = $stock;
    }
    function setFinal_prix($final_prix){        
        $this->final_prix = $final_prix;
    }
/********************************constructeur**********************************/

    public function __construct($id = null) {
        $this->id = "";
        $this->categorie = "";
        $this->titre = "";
        $this->contenu = "";
        $this->prix = "";
        $this->statut = "";
        $this->contenu2= "";
        $this->tva = "";
        $this->stock= "";
        $this->final_prix = "";
        
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
        $sql= "SELECT * FROM `produit` WHERE `id` = :id";
        $req = $bdd->prepare($sql); 
        $codeRetour = $req->execute( [ ":id" =>$id ]); 	
        $ligne = $req->fetch(PDO::FETCH_ASSOC); // On récupère la première ligne 

        if ($ligne === false){
            echo "Produit numéro $id non trouvé <br>";	    
            return false ;
        }	
        // Notre ligne est valide 
        return $this->loadFromTab($ligne);	    
        }
/*********************************loadFromTab**********************************/
    public function loadFromTab($tab){
    // Rôle : changer/charger la valeur de plusieurs attributs en même temps 
    // Paramètre : $tab qui comporte un tableau de setter
    // Retour : néant
        if(isset($tab["id"])){
            $this->setId($tab["id"]);
        }	       
        if(isset($tab["categorie"])){
            $this->setCategorie($tab["categorie"]);
        }
        if(isset($tab["titre"])){
            $this->setTitre($tab["titre"]);
        }
        if(isset($tab["statut"])){
            $this->setStatut($tab["statut"]);
        }      
        if(isset($tab["contenu"])){
            $this->setContenu($tab["contenu"]);
        }        
        if(isset($tab["contenu2"])){
            $this->setcontenu2($tab["contenu2"]);
        }                  
        if(isset($tab["prix"])){
            $this->setPrix($tab["prix"]);
        }
        if(isset($tab["tva"])){
            $this->setTva($tab["tva"]);
        }    
        if(isset($tab["stock"])){
            $this->setStock($tab["stock"]);
        } 
        if(isset($tab["final_prix"])){
            $this->setFinal_prix($tab["final_prix"]);
        }        
    }   
/****************************** insert ***************************************/

    public function insert($prix,$tva, $final_prix){
        // Rôle : insérer un produit dans la base de donnée
        // Paramètre : néant
        // Retour : true si réussi, false sinon
        
        // j'apelle ma base de donné 
        global $bdd;
        //je construits mon chemin sql 
        $sql = "INSERT INTO `produit` SET `titre` = :titre, `categorie` = :categorie, `statut` = :statut, `contenu` =:contenu, `contenu2` =:contenu2, `prix` =:prix, `tva` =:tva, `stock` =:stock, `final_prix` =:final_prix";
        $req = $bdd->prepare($sql);
        if ($req->execute( [    ":titre" => $this->titre,
                                ":categorie"=> $this->categorie,
                                ":statut" => $this->statut,
                                ":contenu"=> $this->contenu,
                                ":contenu2"=> $this->contenu2,
                                ":prix"=> $prix,
                                ":tva" => $tva,
                                ":stock" => $this->stock,
                                ":final_prix" => $final_prix ] ) === false) {
            echo "Erreur requête : $sql";
            return false;
        }else{
            return true;
        }	        
    } 
        public function recherche(){
            // Rôle : rechercher les produits en ligne
            // Retour : produit concerné
            // Paramètres : néant

            global $bdd;
            $sql = "SELECT * FROM produit WHERE `statut` = 1  ORDER BY produit.id desc " ;
        $req=$bdd->prepare($sql);
        if ( $req->execute([":id" => $this->id]) === false){
        echo "Erreur requête : $sql";
        return false;
        }	
        $result=[]; 
        while ($ligne = $req->fetch(PDO::FETCH_ASSOC)) {
                // Remplir le tableau Ã  partir de $ligne
                $produit = new produit();
                $produit->loadFromTab($ligne);           
                $result[$ligne["id"]] = $produit;
        }	
        return $result;
    }   
        public function rechercheNo_online(){
            // Rôle : rechercher les id des produits pas en ligne
        // Retour : l'id du chapitre concerné 
        // Paramètres : néant
            // Récupération de la base de données ouverte
            global $bdd;

            $sql = "SELECT * FROM produit WHERE `statut` = 0  ORDER BY produit.id desc " ;
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
                    $produit = new produit();
                    $produit->loadFromTab($ligne);           
                    $result[$ligne["id"]] = $produit;
            }	
            return $result;
    } 
    public function rechercheDetail(){
    	// Rôle : rechercher les id des produits
	// Retour : l'id du chapitre concerné 
	// Paramètres : néant
        // Récupération de la base de données ouverte
        global $bdd;

        $sql = "SELECT * FROM produit WHERE `id` =:id  " ;
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
                $produit = new produit();
                $produit->loadFromTab($ligne);           
                $result[$ligne["id"]] = $produit;
        }	
        return $result;
    }

    public function modifier(){
        //Rôle : modifier un produit dans la base de donnée
        //Paramètre : néant
        // Retour : true si réussi, false sinon 
        
        global $bdd;
        $sql = "UPDATE `produit` SET `titre` = :titre, `categorie` = :categorie, `statut` = :statut, `contenu` =:contenu, `contenu2` =:contenu2, `final_prix` =:final_prix WHERE produit.id = :id";
        $req = $bdd->prepare($sql);
        if ($req->execute( [    ":id" => $this->id,
                                ":titre" => $this->titre,
                                ":categorie"=> $this->categorie,
                                ":statut" => $this->statut,
                                ":contenu"=> $this->contenu,
                                ":contenu2"=> $this->contenu2,
                                ":final_prix" => $this->final_prix]) === false) {
            echo "Erreur requête : $sql";
            return false;
        }else{
            return true;
        }
    } 
    public function cat1(){
        // Rôle : rechercher les produits en ligne
        // Retour : produit concerné
        // Paramètres : néant

        global $bdd;
        $sql = "SELECT * FROM produit WHERE `categorie` = 1  ORDER BY produit.id desc LIMIT 4" ;
        $req=$bdd->prepare($sql);
        if ( $req->execute([":id" => $this->id]) === false){
        echo "Erreur requête : $sql";
        return false;
        }	
        $result=[]; 
        while ($ligne = $req->fetch(PDO::FETCH_ASSOC)) {
                // Remplir le tableau Ã  partir de $ligne
                $produit = new produit();
                $produit->loadFromTab($ligne);           
                $result[$ligne["id"]] = $produit;
        }	
        return $result;
} 

    public function cat2(){
        // Rôle : rechercher les produits en ligne
        // Retour : produit concerné
        // Paramètres : néant

        global $bdd;
        $sql = "SELECT * FROM produit WHERE `categorie` = 2  ORDER BY produit.id desc " ;
        $req=$bdd->prepare($sql);
        if ( $req->execute([":id" => $this->id]) === false){
        echo "Erreur requête : $sql";
        return false;
        }	
        $result=[]; 
        while ($ligne = $req->fetch(PDO::FETCH_ASSOC)) {
                // Remplir le tableau Ã  partir de $ligne
                $produit = new produit();
                $produit->loadFromTab($ligne);           
                $result[$ligne["id"]] = $produit;
        }	
        return $result;
    }     
    public function cat3(){
        // Rôle : rechercher les produits en ligne
        // Retour : produit concerné
        // Paramètres : néant

        global $bdd;
        $sql = "SELECT * FROM produit WHERE `categorie` = 3  ORDER BY produit.id desc " ;
        $req=$bdd->prepare($sql);
        if ( $req->execute([":id" => $this->id]) === false){
        echo "Erreur requête : $sql";
        return false;
        }	
        $result=[]; 
        while ($ligne = $req->fetch(PDO::FETCH_ASSOC)) {
                // Remplir le tableau Ã  partir de $ligne
                $produit = new produit();
                $produit->loadFromTab($ligne);           
                $result[$ligne["id"]] = $produit;
        }	
        return $result;
    } 







}