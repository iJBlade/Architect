<?php /*fragment pour créer un nouvel article */?>
<div id="art" style="display: none;"> 
        <form id="create_art" method="POST" action="add_art.php">
            <h2 style="padding: 22px 0px;background: darkslategrey; color:white;margin: 2px 0px;">Création d'un nouvel article - Etape n°1 : Insertion des paragraphes.</h2> 
            <div class="group-form">
                <input type="text" name="titre" class="fat" required>
                <label>Titre de l'article</label>      
            </div>
            <div class="group-form">
                <textarea name="contenu" class="fat" required></textarea>
                <label>Contenu n°1</label>        
            </div>
            <div class="group-form">
                <textarea name="contenu2" class="fat" required></textarea>
                <label>Contenu n°2</label>        
            </div>
            <div class="group-form">
                <textarea name="contenu3" class="fat" required></textarea>
                <label>Contenu n°3</label>        
            </div>
            <div class="group-form">
                <textarea name="contenu4" class="fat" required></textarea>
                <label>Contenu n°4</label>        
            </div>     
            <div>
                <input type="hidden" name="statut_article" value="0">     
            </div>   
            <div class="group-form">
                <input type="submit" name="Ajouter" value="Ajouter" class="fat-send" id="send-connexion">
            </div>  
        </form>
</div>
