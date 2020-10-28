<form method="POST" id="presentation1" style="display: none;" >
    <textarea name="presentation1" value="" id="Update_textarea" required></textarea><br>
    <input type="submit" name="presentation1" id="Up_sub" value="Modifier">
</form>
<div id="messages"></div>

<script>

$(function(){
    $("#presentation1").submit(function(){//id de la barre de recherche    
        presentation1 = $(this).find("textarea[name=presentation1]").val();
        $.post("update_profil.php",{presentation1:presentation1},function(){
            if(presentation1 === ""){
                 $("#messages").empty().append("<div>Votre contenu n°1 est vide.</div>");
            }
            if(presentation1 !==""){              
                document.location.href="presentation.php"; 
                $("#messages").empty().append("<div>Votre contenu n°1 a bien été modifié.</div>");  
            }
        });
        return false;
    });
});
</script> 