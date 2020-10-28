<?php // Fragment de modification pour le prix de la classe PRODUIT ?>
<form method="POST" id="prix" style="display: none;" action="update_art.php?prod=<?=$produit->getId()?>" >
    <textarea name="final_prix" value=""></textarea>
    <input type="submit" name="form_modif" value="Modifier">
</form>
<div id="pricemsg"></div>

<script>
/* modification*/ 

$(document).ready(function(){     
    //Dès qu'on clique sur #b1, on applique hide() au titre
    $("#b3").click(function(){
        $("#prix").show(300, "linear");
        $("#b3-1").show(300);        
        $("#b3").hide();        
    });
    $("#b3-1").click(function(){
        $("#prix").hide(300);
        $("#b3-1").hide(300,"linear");        
        $("#b3").show();

    });
    
});
</script>