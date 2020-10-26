<form method="POST" id="profil_title" action="" style="display: none;" >
    <input type="text" name="titre" required></input>
    <input type="submit" name="modifier_titre" value="Modifier">
</form>
<div id="message"></div>

<script>

$(function(){
    $("#profil_title").submit(function(){//id de la barre de recherche    
        titre = $(this).find("input[name=titre]").val();
        $.post("update_profil.php",{titre:titre},function(){
            if(titre === ""){
                 $("#message").empty().append("<div>Votre titre est vide.</div>");
            }
            if(titre !==""){          
                document.location.href="presentation.php"; 
                $("#message").empty().append("<div>Votre titre a bien été modifié.</div>");      
            }
        });
        return false;
    });
});
</script> 