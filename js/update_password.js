$(function(){
    $("#update_password").submit(function(){//id de la barre de recherche
        password = $(this).find("input[name=password]").val();
        password_confirm=$(this).find("input[name=password_confirm]").val();
        $.post("edition_password.php",{password:password,password_confirm:password_confirm},function(){
            if(password !== password_confirm ){         
                $("#Password").empty().append("<div style='color:red;font-weight: bold;'>Vos mots de passes ne correspondent pas.</div>");
            }else{
                $("#Password").empty().append("<div style='color:green;font-weight: bold;'>Vos mots de passes ont été changés.</div>");
                
            }
            if(password === ""){
                $("#Password").empty().append("<div style='color:red;font-weight: bold;'>Veuillez entrez votre mot de passe.</div>");
            }else{
                
            }
            if(password_confirm === ""){
                $("#Password").empty().append("<div style='color:red;font-weight: bold;'>Veuillez confirmer votre mot de passe.</div>");
            }else{
                
            }
            if(password_confirm === "" && password === ""){
                 $("#Password").empty().append("<div style='color:red;font-weight: bold;'>Veuillez remplir les champs.</div>");
            }
        });
        return false;
    });
});