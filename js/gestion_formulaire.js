// formulaire pour gérer les articles/produits en ligne et hors ligne

$(document).ready(function(){     
    //Dès qu'on clique sur #b1, on applique hide() au titre
    $("#hors_ligne").click(function(){
        $("#art_off").show(300, "linear");
        $("#art_on").hide();
        $("#art").hide();
        $("#prod_on").hide();
        $("#prod_off").hide();
        $("#prod").hide();
    });
    $("#en_ligne").click(function(){
        $("#art_on").show(300, "linear");
        $("#art_off").hide();
        $("#art").hide();
        $("#prod_on").hide();
        $("#prod_off").hide();
        $("#prod").hide();
    });  
    $("#article").click(function(){
        $("#art").show(300, "linear");
        $("#art_on").hide();
        $("#art_off").hide();
        $("#prod_on").hide();
        $("#prod_off").hide();
        $("#prod").hide();
    });    
    $("#off").click(function(){
        $("#art_on").hide();
        $("#art_off").hide();
        $("#art").hide();
        $("#prod_on").hide();
        $("#prod_off").show(300,"linear");
        $("#prod").hide();
    })
    $("#on").click(function(){
        $("#art_on").hide();
        $("#art_off").hide();
        $("#art").hide();
        $("#prod_on").show(300,"linear");
        $("#prod_off").hide();
        $("#prod").hide();
    })    
    $("#produit").click(function(){
        $("#art_on").hide();
        $("#art_off").hide();
        $("#art").hide();
        $("#prod_on").hide();
        $("#prod_off").hide();
        $("#prod").show(300,"linear");
    })
    
});