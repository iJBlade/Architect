<!DOCTYPE html>
<?php // page complète où TOUS les produits sont affichés   ?>
<html>
    <?php include 'templates/fragments/head.php'?>
    <title>SHOP-Produits</title>
    <body>
        <?php include 'templates/fragments/header.php'?>
        <main>
            <h1>Liste de produit en vente : </h1>
            <div>
                <a href="#" id="cA">All</a>
                <a href="#" id="c1">Catégorie 1</a>
                <a href="#" id="c2">Catégorie 2</a>
                <a href="#" id="c3">Catégorie 3</a>  
            </div>

            <div>
                <?php include "templates/fragments/produit_all.php"?>
                <?php include "templates/fragments/produit_categorie1.php"?>
                <?php include "templates/fragments/produit_categorie2.php"?>
                <?php include "templates/fragments/produit_categorie3.php"?>
            </div>
        </main>
        <?php include "templates/fragments/footer.php"?>                    
    </body>
</html>

<script>
$(document).ready(function(){     
    //Dès qu'on clique sur #b1, on applique hide() au titre
    $("#c1").click(function(){
        $("#categorie1").show(300, "linear");
        $("#categorie2").hide();
        $("#categorie3").hide();
        $("#categorieAll").hide();

    });
    $("#c2").click(function(){
        $("#categorie1").hide()
        $("#categorie2").show(300, "linear");
        $("#categorie3").hide();
        $("#categorieAll").hide();
    });
    $("#c3").click(function(){
        $("#categorie1").hide();
        $("#categorie2").hide();
        $("#categorie3").show(300, "linear");
        $("#categorieAll").hide();
    });
    $("#cA").click(function(){
        $("#categorie1").hide();
        $("#categorie2").hide();
        $("#categorie3").hide()
        $("#categorieAll").show(300, "linear");
    });
    
    
});
</script>