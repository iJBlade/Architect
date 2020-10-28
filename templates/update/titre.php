<form method="POST" id="titre" style="display: none;" >
    <input type='text' name="titre" value="" id="Update_titre">
    <input type="submit" name="form_modif" value="Modifier" id="Up_sub">
</form>
<div id="message"></div> 

<script>
/* modification*/ 
$(document).ready(function(){     
    //Dès qu'on clique sur #b1, on applique hide() au titre
    $("#b0").click(function(){
        $("#titre").show(300);
        $("#b01").show(300);        
        $("#b0").hide();

    });
    $("#b01").click(function(){
        $("#titre").hide(300, "linear");
        $("#b01").hide(300,"linear");        
        $("#b0").show();

    });
    
});
$(function(){
    $("#titre").submit(function(){//id de la barre de recherche    
        titre = $(this).find("input[name=titre]").val();
        $.post("update_art.php?<?php if(isset($_GET["id"])){echo "id=";}else{ echo "prod=";}?><?php if(isset($_GET["id"])){echo $article->getId();}else{ echo $produit->getId();}?>",{titre:titre},function(){
            if(titre === ""){
                 $("#message").empty().append("<div>Votre titre est vide.</div>");
            }
            if(titre !==""){
                $("#message").empty().append("<div>Votre titre a bien été modifié.</div>");                
                document.location.href="update.php?<?php if(isset($_GET["id"])){echo "id=";}else{ echo "prod=";}?><?php if(isset($_GET["id"])){echo $article->getId();}else{ echo $produit->getId();}?>"; 
            }
        });
        return false;
    });
});
</script>