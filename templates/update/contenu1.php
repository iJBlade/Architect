<form method="POST" id="contenu" style="display: none;" >
    <textarea name="contenu" cols="30" rows="10"></textarea>
    <input type="submit" name="form_modif" value="Modifier">
</form>
<div id="message"></div>

<script>
/* modification*/ 

$(document).ready(function(){     
    //Dès qu'on clique sur #b1, on applique hide() au titre
    $("#b1").click(function(){
        $("#contenu").show(300, "linear");
        $("#b1-1").show(300);        
        $("#b1").hide();        
    });
    $("#b1-1").click(function(){
        $("#contenu").hide(300);
        $("#b1-1").hide(300,"linear");        
        $("#b1").show();

    });
    
});
$(function(){
    $("#contenu").submit(function(){//id de la barre de recherche    
        contenu = $(this).find("textarea[name=contenu]").val();
        $.post("update_art.php?<?php if(isset($_GET["id"])){echo "id=";}else{ echo "prod=";}?><?php if(isset($_GET["id"])){echo $article->getId();}else{ echo $produit->getId();}?>",{contenu:contenu},function(){
            if(contenu === ""){
                 $("#message").empty().append("<div>Votre contenu n°1 est vide.</div>");
            }
            if(contenu !==""){
                $("#message").empty().append("<div>Votre contenu n°1 a bien été modifié.</div>");                
                document.location.href="update.php?<?php if(isset($_GET["id"])){echo "id=";}else{ echo "prod=";}?><?php if(isset($_GET["id"])){echo $article->getId();}else{ echo $produit->getId();}?>"; 
            }
        });
        return false;
    });
});
</script>