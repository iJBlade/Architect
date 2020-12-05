<?php // Fragment de modification pour le prix de la classe PRODUIT ?>
<form method="POST" id="prix_final" style="display: none;" >
    <textarea name="final_prix" id="Update_textarea" ></textarea><br>
    <input type="submit" name="form_modif" value="Modifier" id="Up_sub"><br>
</form>
<div id="pricemsg"></div>

<script>
/* modification*/ 

$(document).ready(function(){     
    //Dès qu'on clique sur #b1, on applique hide() au titre
    $("#b3").click(function(){
        $("#prix_final").show(300, "linear");
        $("#b3-1").show(300);        
        $("#b3").hide();        
    });
    $("#b3-1").click(function(){
        $("#prix_final").hide(300);
        $("#b3-1").hide(300,"linear");        
        $("#b3").show();

    });
    
});
$(function(){
    $("#prix_final").submit(function(){//id de la barre de recherche    
        final_prix = $(this).find("textarea[name=final_prix]").val();
        $.post("update_prix.php?prod=<?= $produit->getId() ?>",{final_prix:final_prix},function(){
            if(final_prix === ""){
                 $("#pricemsg").empty().append("<div>Votre final_prix n°1 est vide.</div>");
            }
            if(final_prix !==""){
                $("#pricemsg").empty().append("<div>Votre final_prix n°1 a bien été modifié.</div>");                
                document.location.href="update.php?prod=<?= $produit->getId() ?>"; 
            }
        });
        return false;
    });
});

</script>