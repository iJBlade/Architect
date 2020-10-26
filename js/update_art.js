// programme  jquery en correlation avec le controleur update_art
$(function(){
    $("#contenu").submit(function(){//id de la barre de recherche    
        contenu = $(this).find("textarea[name=contenu]").val();
        $.post("update_art.php?id=<?= $article->getId() ?>",{contenu:contenu},function(){
            if(contenu === ""){
                 $("#message").empty().append("<div>Votre contenu n°1 est vide.</div>");
            }
            if(contenu !==""){
                $("#message").empty().append("<div>Votre contenu n°1 a bien été modifié.</div>");                
                document.location.href="update.php?id=<?= $article->getId() ?>"; 
            }
        });
        return false;
    });
});

$(function(){
    $("#contenu2").submit(function(){//id de la barre de recherche    
        contenu2 = $(this).find("textarea[name=contenu2]").val();
        $.post("update_art.php?id=<?= $article->getId() ?>",{contenu2:contenu2},function(){
            if(contenu2 === ""){
                 $("#message2").empty().append("<div>Votre contenu n°2 est vide.</div>");
            }
            if(contenu2 !==""){
                $("#message2").empty().append("<div>Votre contenu n°2 a bien été modifié.</div>");  
                document.location.href="update.php?id=<?= $article->getId() ?>";               
            }
        });
        return false;
    });
});

$(function(){
    $("#contenu3").submit(function(){//id de la barre de recherche    
        contenu3 = $(this).find("textarea[name=contenu3]").val();
        $.post("update_art.php?id=<?= $article->getId() ?>",{contenu3:contenu3},function(){
            if(contenu3 === ""){
                 $("#message3").empty().append("<div>Votre contenu n°3 est vide.</div>");
            }
            if(contenu3 !==""){
                $("#message3").empty().append("<div>Votre contenu n°3 a bien été modifié.</div>");
                document.location.href="update.php?id=<?= $article->getId() ?>";                    
            }
        });
        return false;
    });
});
$(function(){
    $("#contenu4").submit(function(){//id de la barre de recherche    
        contenu4 = $(this).find("textarea[name=contenu4]").val();
        $.post("update_art.php?id=<?= $article->getId() ?>",{contenu4:contenu4},function(){
            if(contenu4 === ""){
                 $("#message4").empty().append("<div>Votre contenu n°4 est vide.</div>");
            }
            if(contenu4 !==""){
                $("#message4").empty().append("<div>Votre contenu n°4 a bien été modifié.</div>"); 
                document.location.href="update.php?id=<?= $article->getId() ?>";                   
            }
        });
        return false;
    });
});