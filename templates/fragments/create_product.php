
<?php /*fragment pour créer un nouveau produit */?>
<div id="prod" style="display: none;">
        <form id="create_prod" method="POST" action="add_art.php" >
            <h2 style="padding: 22px 0px;margin: 2px 0px;">Création d'un nouveau produit - Etape n°1 : Insertion du texte.</h2>
            <div class="group-form">
                <input type="text" name="titre" class="fat" required>
                <label>Titre du produit</label>      
            </div>
            <div class="group-form">
                <p style="float: left;padding-left: 18px;font-size: 16px;padding: 10px;">Description n°1</p>
                <textarea name="contenu" required style="width:100%;border: 1px solid black;"></textarea>     
            </div>
            <div class="group-form">
                <p style="float: left;padding-left: 18px;font-size: 16px;padding: 10px;">Description n°2</p>    
                <textarea name="contenu2" required style="width:100%;border: 1px solid black;"></textarea>    
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

                    <div style="width: 130px;margin: 0 auto;">
                    <?php foreach ($ligne_categorie as $categorie=>$id){ ?> 
                        <p style="font-size: 17px;padding: 15px;"><?=$id->getTitre()?></p>
                        <input type="radio" name="categories" value="<?=$id->getId()?>">       

                    <?php }?> 
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
