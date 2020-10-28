<form method="POST" id="contenu3" style="display: none;" >
    <textarea name="contenu3" value="" id="Update_textarea"></textarea><br>
    <input type="submit" name="form_modif" value="Modifier" id="Up_sub">
</form>
<div id="message"></div>

<script>
/* modification*/ 
$(document).ready(function(){     
    //Dès qu'on clique sur #b1, on applique hide() au titre
    $("#b3").click(function(){
        $("#contenu3").show(300, "linear");
        $("#b3-1").show(300);        
        $("#b3").hide();        
    });
    $("#b3-1").click(function(){
        $("#contenu3").hide(300);
        $("#b3-1").hide(300,"linear");        
        $("#b3").show();

    });
    
});
$(function(){
    $("#contenu3").submit(function(){//id de la barre de recherche    
        contenu3 = $(this).find("textarea[name=contenu3]").val();
        $.post("update_art.php?id=<?= $article->getId() ?>",{contenu3:contenu3},function(){
            if(contenu3 === ""){
                 $("#message").empty().append("<div>Votre contenu n°3 est vide.</div>");
            }
            if(contenu3 !==""){
                $("#message").empty().append("<div>Votre contenu n°3 a bien été modifié.</div>");                
                document.location.href="update.php?id=<?= $article->getId() ?>"; 
            }
        });
        return false;
    });
});
</script>