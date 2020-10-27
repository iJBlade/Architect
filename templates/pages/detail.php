<!DOCTYPE html>
<?php // page du détail d'un article du site de drop shipping ?>
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
        <link href="css/dashboard_article.css" rel="stylesheet" type="text/css"/>                  
        <title><?= htmlentities($article->getTitre())?></title>       
    </head>
    <body>
        <?php include 'templates/fragments/header.php'?>
    <body>
        <main style="position:absolute;top:60px;width:100%; ">
        
        <?php foreach($lignes as $article){ ?>   
                <div id="medium_column"style="display:flex;">
                    <div id="medium_column2">
                        <div id="medium_column_parent">
                                <div id="medium_child">
                                    <h2>Animation</h2><!-- titre  php-->
                                </div>
                                <div id="medium_child2">
                                    <h1><?= htmlentities($article->getTitre())?></h1>
                                    <div id="border"></div>
                                    <p><?= htmlentities($article->getContenu())?><!-- titre  contenu-->   
                                    <p><?= htmlentities($article->getContenu2())?><!-- titre  contenu-->   
                                    <p><?= htmlentities($article->getContenu3())?><!-- titre  contenu-->   
                                </div>                                   
                        </div> 
                    </div>                            
                    <div id="slider">                                                         
                        <img src="photo1/<?= htmlentities($article->getId())?>.jpg" class="slide1" />                                     
                        <img src="photo2/<?= htmlentities($article->getId())?>.jpg" class="slide2" />                                                                         
                        <img src="photo3/<?= htmlentities($article->getId())?>.jpg" class="slide3" />                                     
                    </div>
                </div>
                <?php } ?>
        </main>
        <?php  include "templates/fragments/footer_blog.php"?>                    
    </body>
</html>
<script src="js/header.js" type="text/javascript"></script>
<script src="js/all.js" type="text/javascript"></script>