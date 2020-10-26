// Programme de création d'un article
$(function(){
    $("#create_art").submit(function(e){//id de la barre de recherche  
        e.preventDefault();
        titre = $(this).find("input[name=titre]").val();
        contenu = $(this).find("textarea[name=contenu]").val();
        contenu2 = $(this).find("textarea[name=contenu2]").val();
        contenu3 = $(this).find("textarea[name=contenu3]").val();     
        contenu4 = $(this).find("textarea[name=contenu4]").val();
        statut_article = $(this).find("input[name=statut_article]").val();
        $.post("add_art.php",{titre:titre,contenu:contenu,contenu2:contenu2,contenu3:contenu3,contenu4:contenu4,statut_article:statut_article},function(){
            if(titre && contenu !== "" ){
                $("#message").empty().append("<div>Votre article a bien été ajouté.</div>");                
                document.location.href="dashboard.php"; 
            }else{
                $("#message").empty().append("<div>Veuillez remplir le titre et le contenu n°1.</div>");  
            }
        });
        return false;
    });
});