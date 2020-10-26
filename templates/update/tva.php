<form method="POST" id="tva" style="display: none;" >
    <textarea name="tva" value=""></textarea>
    <input type="submit" name="form_modif" value="Modifier">
</form>
<div id="message"></div>

<script>
/* modification*/ 
$(document).ready(function(){     
    //Dès qu'on clique sur #b1, on applique hide() au titre
    $("#b4").click(function(){
        $("#tva").show(300, "linear");
        $("#b4-1").show(300);        
        $("#b4").hide();        
    });
    $("#b4-1").click(function(){
        $("#tva").hide(300);
        $("#b4-1").hide(300,"linear");        
        $("#b4").show();

    });

    
});
$(function(){
    $("#tva").submit(function(){//id de la barre de recherche    
        tva = $(this).find("textarea[name=tva]").val();
        $.post("update_art.php?prod=<?= $produit->getId()?>",{tva:tva},function(){
            if(tva === ""){
                 $("#message").empty().append("<div>Votre contenu n°4 est vide.</div>");
            }
            if(tva !==""){
                $("#message").empty().append("<div>Votre contenu n°4 a bien été modifié.</div>");                
                document.location.href="update.php?prod=<?= $produit->getId() ?>"; 
            }
        });
        return false;
    });
});
</script>