<form method="POST" id="contenu2" style="display: none;" >
    <textarea name="contenu2" value="" id="Update_textarea"></textarea><br>
    <input type="submit" name="form_modif" value="Modifier" id="Up_sub">
</form>
<div id="message"></div>

<script>
/* modification*/ 
$(document).ready(function(){     
    //Dès qu'on clique sur #b1, on applique hide() au titre
    $("#b2").click(function(){
        $("#contenu2").show(300, "linear");
        $("#b2-1").show(300);        
        $("#b2").hide();        
    });
    $("#b2-1").click(function(){
        $("#contenu2").hide(300);
        $("#b2-1").hide(300,"linear");        
        $("#b2").show();

    });
    
});
$(function(){
    $("#contenu2").submit(function(){//id de la barre de recherche    
        contenu2 = $(this).find("textarea[name=contenu2]").val();
        $.post("update_art.php?<?php if(isset($_GET["id"])){echo "id=";}else{ echo "prod=";}?><?php if(isset($_GET["id"])){echo $article->getId();}else{ echo $produit->getId();}?>",{contenu2:contenu2},function(){
            if(contenu2 === ""){
                 $("#message").empty().append("<div>Votre contenu n°2 est vide.</div>");
            }
            if(contenu2 !==""){
                $("#message").empty().append("<div>Votre contenu n°2 a bien été modifié.</div>");                
                document.location.href="update.php?<?php if(isset($_GET["id"])){echo "id=";}else{ echo "prod=";}?><?php if(isset($_GET["id"])){echo $article->getId();}else{ echo $produit->getId();}?>"; 
            }
        });
        return false;
    });
});
</script>