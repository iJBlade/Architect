
<?php /*fragment pour créer un nouveau produit */?>
<div id="prod" style="display: none;">
        <form id="create_prod" method="POST" action="add_art.php" >
            <h2 style="padding: 22px 0px;background: darkgoldenrod; color:white;margin: 2px 0px;">Création d'un nouveau produit - Etape n°1 : Insertion du texte.</h2>
            <div>
                <input type="text" name="titre">
                <label>Titre de l'article</label>      
            </div>
            <div>
                <textarea name="contenu"></textarea>
                <label>Description n°1</label>        
            </div>
            <div>
                <textarea name="contenu2"></textarea>
                <label>Description n°2</label>        
            </div>
            <div>
                <p>Sélectionnez une catégorie pour ce produit:</p>
                    <div>
                        <input type="radio" name="categorie" value="1"checked>
                        <label>Categorie 1 </label>
                    </div>
                    <div>
                        <input type="radio" name="categorie" value="2">
                        <label>Categorie 2</label>
                    </div>
                    <div>
                        <input type="radio" name="categorie" value="3">
                        <label>Categorie 3</label>
                    </div>
            </div>
            <div>
                <textarea name="prix" ></textarea>
                <label>Prix</label>        
            </div>
            <div>
                <textarea name="tva"></textarea>
                <label>Tva</label>        
            </div>
            <div>
                <textarea name="final_prix" value=""></textarea>
                <label>Final prix</label>        
            </div>        
            <div>
                <input type="hidden" name="statut" value="0">     
            </div>     
            <input type="submit" name="Ajouter_product" value="Ajouter">
        </form>
    <div id="message_product"></div>
</div>


