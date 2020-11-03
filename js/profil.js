// formulaire pour gérer les animations formulaires password et création article
$(document).ready(function(){     
    //Dès qu'on clique sur #b1, on applique hide() au titre
    $("#password").click(function(){
        $("#update_password").show(300, "linear");
        $("#passwordClose").show();
        $("#password").hide();
        $("#b-p").hide();
        $("#desc1").hide();   
        $("#desc2").hide();   
    });
    $("#passwordClose").click(function(){
        $("#update_password").hide();
        $("#passwordClose").hide();
        $("#password").show();
        $("#b-p").show();
        $("#desc1").show();   
        $("#desc2").show();
    });
    
});
// animation pour la page profil 
$(document).ready(function(){     
    //Titre
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

    // Contenu n°1
    $("#b-p").click(function(){
        $("#presentation1").show(300, "linear");
        $("#b-p1").show(300);        
        $("#b-p").hide();   
        $("#password").hide(); 
        $("#desc1").hide();   
        $("#desc2").hide();              
    });
    $("#b-p1").click(function(){
        $("#presentation1").hide(300);
        $("#b-p1").hide(300,"linear");        
        $("#b-p").show();
        $("#password").show();
        $("#desc1").show();   
        $("#desc2").show();

    });
    // Contenu n°2
    $("#b-p2").click(function(){
        $("#presentation2").show(300, "linear");
        $("#b-p02").show(300);        
        $("#b-p2").hide();   
        $("#desc1").hide();   
        $("#desc2").hide();       
    });
    $("#b-p02").click(function(){
        $("#presentation2").hide(300);
        $("#b-p02").hide(300,"linear");        
        $("#b-p2").show();
        $("#desc1").show();   
        $("#desc2").show();  

    });

});