<!DOCTYPE html>
<?php 
/*
    Tableau de bord de l'administratrice Marie. Les clients ne peuvent le voir et cette page concentre le récapitulatif de tous ses articles/produits , en cours de publication ou publié 
*/ 
?>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>  
        <link href="css/style.css" rel="stylesheet" type="text/css"/> 
        <link href="css/header.css" rel="stylesheet" type="text/css"/>  
        <link href="css/footer_blog.css" rel="stylesheet" type="text/css"/>  
        <link href="css/all.css" rel="stylesheet" type="text/css"/> 
        <link href="css/dashboard.css" rel="stylesheet" type="text/css"/>
        <link href="css/create.css" rel="stylesheet" type="text/css"/>                 
        <title>Tableau de bord</title>       
    </head>
        <body>
            <?php include 'templates/fragments/header.php'?>
            <main>
                <h1 style="text-align: center;">Tableau de bord</h1>
                <div style="max-width: 1200px;margin: 0 auto; padding:40px 20px;">
                    <div style="float: left;">
                        <a href="#" id="hors_ligne">Article hors ligne|</a>
                        <a href="#" id="en_ligne">Article en ligne|</a>
                        <a href="#" id="article">Créer un nouvel article</a>
                    </div>
                    <div style="float:right;">
                        <a href="#" id="off">Produit hors ligne|</a>
                        <a href="#" id="on">Produit en ligne|</a>
                        <a href="#" id="produit">Créer un nouveau produit</a>
                    </div>
                </div>




                <div style="text-align: center;">
                    <?php include "templates/fragments/compteur.php"?>
                    <?php include "templates/fragments/article_en_cours.php"?>   
                    <?php include "templates/fragments/article_en_ligne.php"?>
                    <?php include "templates/fragments/create_art.php"?>

                    <?php include "templates/fragments/produit_en_cours.php"?>   
                    <?php include "templates/fragments/produit_en_ligne.php"?>
                    <?php include "templates/fragments/create_product.php"?>
                </div>        
            </main>
            <?php  include "templates/fragments/footer.php"?>  
            <script src="js/gestion_formulaire.js" type="text/javascript"></script> 
            <script src="js/header.js" type="text/javascript"></script>     
            <script src="js/all.js" type="text/javascript"></script>             
        </body>
</html>
