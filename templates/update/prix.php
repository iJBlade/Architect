<?php // Fragment de modification pour le prix de la classe PRODUIT ?>
<form method="POST" id="prix" style="display: none;" >
    <textarea name="prix" cols="30" rows="10"></textarea>
    <input type="submit" name="form_modif" value="Modifier">
</form>
<div id="message"></div>

<script>
/* modification*/ 

$(document).ready(function(){     
    //Dès qu'on clique sur #b1, on applique hide() au titre
    $("#b3").click(function(){
        $("#prix").show(300, "linear");
        $("#b3-1").show(300);        
        $("#b3").hide();        
    });
    $("#b3-3").click(function(){
        $("#prix").hide(300);
        $("#b3-1").hide(300,"linear");        
        $("#b3").show();

    });
    
});
$(function(){
    $("#prix").submit(function(){//id de la barre de recherche    
        prix = $(this).find("textarea[name=prix]").val();
        $.post("update_art.php?prod=<?= $produit->getId()?>",{prix:prix},function(){
            if(prix === ""){
                 $("#message").empty().append("<div>Votre prix est vide.</div>");
            }
            if(prix !==""){
                $("#message").empty().append("<div>Votre prix a bien été modifié.</div>");                
                document.location.href="update.php?prod=<?= $produit->getId()?>"; 
            }
        });
        return false;
    });
});
</script>