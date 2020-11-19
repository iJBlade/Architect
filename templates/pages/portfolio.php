<!DOCTYPE html>
<?php // page complète où TOUS les articles sont affichés côté CLIENT  ?>
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
        <title>Portfolio</title>       
    </head>
        <body>
            <?php include 'templates/fragments/header.php'?>
            <main style="position:absolute;top:60px">
                <div>
                    <?php  foreach ($lignes as $article){ ?>
                        <figure class="snip1584"> 
                            <img src="photo1/<?= htmlentities($article->getId())?>.jpg" alt="sample87"/>
                            <figcaption>
                                <h3><?= htmlentities($article->getTitre())?></h3>
                            </figcaption>
                            <a href="oeuvres.php?id=<?=$article->getId()?>" id="aI"></a>
                        </figure>
                    <?php } ?>
                </div> 
            </main>
            <?php  include "templates/fragments/footer.php"?>                    
        </body>
</html>
<script src="js/header.js" type="text/javascript"></script>
<script src="js/all.js" type="text/javascript"></script>