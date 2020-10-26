// formulaire pour gérer les animations formulaires password et création article
$(document).ready(function(){     
    //Dès qu'on clique sur #b1, on applique hide() au titre
    $("#password").click(function(){
        $("#update_password").show(300, "linear");
        $("#passwordClose").show();
        $("#password").hide();
    });
    $("#passwordClose").click(function(){
        $("#update_password").hide();
        $("#passwordClose").hide();
        $("#password").show();
    });
    
});
// animation pour la page profil 
$(document).ready(function(){     
    //Dès qu'on clique sur #b1, on applique hide() au titre
    $("#b-t").click(function(){
        $("#profil_title").show(300, "linear");
        $("#bt-1").show(300);        
        $("#b-t").hide();        
    });
    $("#bt-1").click(function(){
        $("#profil_title").hide(300);
        $("#bt-1").hide(300,"linear");        
        $("#b-t").show();

    });
    $("#b-p").click(function(){
        $("#presentation1").show(300, "linear");
        $("#b-p1").show(300);        
        $("#b-p").hide();        
    });
    $("#b-p1").click(function(){
        $("#presentation1").hide(300);
        $("#b-p1").hide(300,"linear");        
        $("#b-p").show();

    });
    $("#b-p2").click(function(){
        $("#presentation2").show(300, "linear");
        $("#b-p02").show(300);        
        $("#b-p2").hide();        
    });
    $("#b-p02").click(function(){
        $("#presentation2").hide(300);
        $("#b-p02").hide(300,"linear");        
        $("#b-p2").show();

    });

});