
<?php /*fragment pour créer un nouveau produit */?>
<div id="prod" style="display: none;">
        <form id="create_prod" method="POST" action="add_art.php" >
            <h2 style="padding: 22px 0px;background: darkgoldenrod; color:white;margin: 2px 0px;">Création d'un nouveau produit - Etape n°1 : Insertion du texte.</h2>
            <div class="group-form">
                <input type="text" name="titre" class="fat" required>
                <label>Titre de l'article</label>      
            </div>
            <div class="group-form">
                <textarea name="contenu" class="fat" required></textarea>
                <label>Description n°1</label>        
            </div>
            <div class="group-form">
                <textarea name="contenu2" class="fat" required></textarea>
                <label>Description n°2</label>        
            </div>
            <div class="group-form" >
                <input type="number" name="prix" class="fat" min="0" step="any" required>
                <label>Prix</label>        
            </div>
            <div class="group-form">
                <input type="number" name="tva" class="fat" min="0" step="any" required>
                <label>Tva</label>        
            </div> 
            <div class="group-form">
                <p style="font-size: 17px;padding: 15px;">Sélectionnez une catégorie pour ce produit:</p>
                    <div style="display:flex;"style="display:flex;left: 46%;position: absolute;top: 33%;">
                        <p style="font-size: 17px;padding: 15px;">Categorie 1 </p>
                        <input type="radio" name="categorie" value="1"checked>
                    </div>
                    <div style="display:flex;"style="display:flex;left: 46%;position: absolute;top: 33%;">
                        <p style="font-size: 17px;padding: 15px;">Categorie 2</p>
                        <input type="radio" name="categorie" value="2">                       
                    </div>
                    <div style="display:flex;"style="display:flex;left: 46%;position: absolute;top: 33%;">
                        <p style="font-size: 17px;padding: 15px;">Categorie 3</p>
                        <input type="radio" name="categorie" value="3">
                        
                    </div>
            </div>      
            <div>
                <input type="hidden" name="final_prix" >    
                <input type="hidden" name="statut" value="0">     
            </div>  
            <div class="group-form">
                <input type="submit" name="Ajouter_product" class="fat-send" value="Ajouter">
            </div>   
        </form>
    <div id="message_product"></div>
</div>
