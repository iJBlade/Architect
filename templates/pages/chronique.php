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
        <link href="css/chronique.css" rel="stylesheet" type="text/css"/> 
             
        <title>Article-<?= htmlentities($chronique->getTitre())?></title>       
    </head>
    <body>
        <?php include 'templates/fragments/header.php'?>
    <body>
        <main>
        
        <?php foreach($lignes as $chronique){ ?>   
                <div id="container_head">
                    <div id="head">
                        <h1><?= htmlentities($chronique->getTitre()) ?></h1>
                        <h4>Date-Catégories</h4>

                    </div>
                    <div id="slider">                                                         
                        <img src="photochronique1/<?= htmlentities($chronique->getId())?>.jpg" class="slide1" />                                     
                        <img src="photochronique2/<?= htmlentities($chronique->getId())?>.jpg" class="slide2" />                                                                         
                        <img src="photochronique3/<?= htmlentities($chronique->getId())?>.jpg" class="slide3" />                                     
                    </div>
                </div>   
                <div id="container_bottom">
                        <p><?= nl2br(htmlentities($chronique->getContenu())) ?></p>
                        <p><?= nl2br(htmlentities($chronique->getContenu2())) ?></p>
                        <p><?= nl2br(htmlentities($chronique->getContenu3())) ?></p>
                        <p><?= nl2br(htmlentities($chronique->getContenu4())) ?></p>
                </div>   
                <?php } ?>
        </main>
        <?php  include "templates/fragments/footer.php"?>                    
    </body>
</html>
<script src="js/header.js" type="text/javascript"></script>
<script src="js/all.js" type="text/javascript"></script>