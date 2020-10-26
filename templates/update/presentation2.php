<form method="POST" id="presentation2" style="display: none;" >
    <textarea name="presentation2" required></textarea>
    <input type="submit" name="presentation2" value="Modifier">
</form>
<div id="msg"></div>

<script>

$(function(){
    $("#presentation2").submit(function(){//id de la barre de recherche    
        presentation2 = $(this).find("textarea[name=presentation2]").val();
        $.post("update_profil.php",{presentation2:presentation2},function(){
            if(presentation2 === ""){
                 $("#msg").empty().append("<div>Votre contenu n°2 est vide.</div>");
            }
            if(presentation2 !==""){               
                document.location.href="presentation.php"; 
                $("#msg").empty().append("<div>Votre contenu n°2 a bien été modifié.</div>");  
            }
        });
        return false;
    });
});
</script> 