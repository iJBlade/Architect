<form method="POST" id="contenu4" style="display: none;" >
    <textarea name="contenu4" value="" id="Update_textarea"></textarea><br>
    <input type="submit" name="form_modif" value="Modifier" id="Up_sub">
</form>
<div id="message"></div>

<script>
/* modification*/ 
$(document).ready(function(){     
    //Dès qu'on clique sur #b1, on applique hide() au titre
    $("#b4").click(function(){
        $("#contenu4").show(300, "linear");
        $("#b4-1").show(300);        
        $("#b4").hide();        
    });
    $("#b4-1").click(function(){
        $("#contenu4").hide(300);
        $("#b4-1").hide(300,"linear");        
        $("#b4").show();
    });    
});
$(function(){
    $("#contenu4").submit(function(){//id de la barre de recherche    
        contenu4 = $(this).find("textarea[name=contenu4]").val();
        $.post("update_art.php?chronique=<?= $chronique->getId() ?>",{contenu4:contenu4},function(){
            if(contenu4 === ""){
                 $("#message").empty().append("<div>Votre contenu n°4 est vide.</div>");
            }
            if(contenu4 !==""){
                $("#message").empty().append("<div>Votre contenu n°4 a bien été modifié.</div>");                
                document.location.href="update.php?chronique=<?= $chronique->getId() ?>"; 
            }
        });
        return false;
    });
});
</script>