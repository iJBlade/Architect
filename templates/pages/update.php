<!DOCTYPE html>
<?php // page qui affiche l'article a modifier ?>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>  
        <link href="css/style.css" rel="stylesheet" type="text/css"/> 
        <link href="css/header.css" rel="stylesheet" type="text/css"/>  
        <link href="css/photo.css" rel="stylesheet" type="text/css"/>  
        <link href="css/footer_blog.css" rel="stylesheet" type="text/css"/> 
        <link href="css/all.css" rel="stylesheet" type="text/css"/>                
        <title>Articles</title>       
    </head>
        <body>
            <?php include 'templates/fragments/header.php'?>
            <main style="position:absolute;top:72px;width: 90%;height: 100%;left: 150px;">
           
                <?php 
                    if(isset($_GET["id"])){
                        include "templates/fragments/update_article.php";
                    }elseif(isset($_GET["prod"])){
                        include "templates/fragments/update_produit.php";
                    }else{
                        echo "";
                    }                              
                ?>
            </main>
            <?php  include "templates/fragments/footer_blog.php"?>                    
        </body>
</html>
<script src="js/header.js" type="text/javascript"></script>
<script src="js/all.js" type="text/javascript"></script>