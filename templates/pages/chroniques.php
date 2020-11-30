<!DOCTYPE html>
<?php // page complète où TOUTES les chroniques sont affichés côté CLIENT  ?>
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
        <title>Articles</title>       
    </head>
        <body>
            <?php include 'templates/fragments/header.php'?>
            <main style="/*! position:absolute; *//*! top:60px; */    /*! margin-bottom: 145px; */position: absolute;top: 60px;margin-bottom: 145px;margin: 0 auto;width: 100%;">
                <div>
                <?php if(isset($_GET["categorie"])){
                            foreach ($ligne as $chronique){ ?>
                                <figure class="snip1584"> 
                                    <img src="photochronique1/<?= htmlentities($chronique->getId())?>.jpg" alt="sample87"/>
                                    <figcaption>
                                        <h3><?= htmlentities($chronique->getTitre())?></h3>
                                    </figcaption>
                                    <a href="article.php?id=<?=$chronique->getId()?>" id="aI"></a>
                                </figure>
                            <?php }
                            
                            }else{
                              foreach ($lignes as $chronique){ ?>
                        <figure class="snip1584"> 
                            <img src="photochronique1/<?= htmlentities($chronique->getId())?>.jpg" alt="sample87"/>
                            <figcaption>
                                <h3><?= htmlentities($chronique->getTitre())?></h3>
                            </figcaption>
                            <a href="article.php?id=<?=$chronique->getId()?>" id="aI"></a>
                        </figure>
                    <?php } } ?>
                </div> 
            </main>
            <?php  include "templates/fragments/footer.php"?>                    
        </body>
</html>
<script src="js/header.js" type="text/javascript"></script>
<script src="js/all.js" type="text/javascript"></script>