<?php /*fragment pour créer un nouvel article */?>
<div id="chro" style="display: none;"> 
        <form id="create_art" method="POST" action="add_art.php">
            <h2 style="padding: 22px 0px;margin: 2px 0px;">Création d'un nouvel article - Etape n°1 : Insertion des paragraphes.</h2> 
            <div class="group-form">
                <input type="text" name="titre" class="fat" required>
                <label>Titre de l'article</label>      
            </div>
            <div class="group-form">   
                <p style="float: left;padding-left: 18px;font-size: 16px;padding: 10px;">Contenu n°1</p>    
                <textarea name="contenu" required style="width:100%;border: 1px solid black;"></textarea>  
            </div>
            <div class="group-form">
                <p style="float: left;padding-left: 18px;font-size: 16px;padding: 10px;">Contenu n°2</p>    
                <textarea name="contenu2" required style="width:100%;border: 1px solid black;"></textarea>      
            </div>
            <div class="group-form">
                <p style="float: left;padding-left: 18px;font-size: 16px;padding: 10px;">Contenu n°3</p>    
                <textarea name="contenu3" required style="width:100%;border: 1px solid black;"></textarea>         
            </div>
            <div class="group-form">
                <p style="float: left;padding-left: 18px;font-size: 16px;padding: 10px;">Contenu n°4</p>    
                <textarea name="contenu4" required style="width:100%;border: 1px solid black;"></textarea>         
            </div>     
            <div>
                <input type="hidden" name="statut_chronique" value="0">     
            </div>   
            <div class="group-form">
                <input type="submit" name="Ajouter_chronique" value="Ajouter" class="fat-send" id="send-connexion">
            </div>  
        </form>
</div>
 