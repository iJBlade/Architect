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
        <title><?= htmlentities($article->getTitre())?></title>       
    </head>
    <body>
        <?php include 'templates/fragments/header.php'?>
    <body>
        <main style="position:absolute;top:60px;left:25px;">
            <div>
                <?php  foreach ($lignes as $article){ ?>
                        <h3><?= htmlentities($article->getTitre())?></h3><!-- titre  php-->
            <!-- ici normalement il y a la photo de l'article comme dans notyourbabe <img style="width:700px;height:700px;"src=" htmlentities($article->getPhoto())"> -->
                        <div style="display: flex;">
                            <div>
                                <img src="photo1/<?= htmlentities($article->getId())?>.jpg" width="400px" height="400px"/>  
                            </div>   
                            <div>
                                <img src="photo2/<?= htmlentities($article->getId())?>.jpg" width="400px" height="400px"/>
                            </div>
                            <div>
                                <img src="photo3/<?= htmlentities($article->getId())?>.jpg" width="400px" height="400px"/>                       
                            </div>
                        </div>             
            
                        <p><?= htmlentities($article->getContenu())?></p><!-- titre  contenu-->   
                        <p><?= htmlentities($article->getContenu2())?></p><!-- titre  contenu-->   
                        <p><?= htmlentities($article->getContenu3())?></p><!-- titre  contenu-->   
                        <p><?= htmlentities($article->getContenu4())?></p><!-- titre  contenu-->   
                     

                <?php } ?>
            </div>
            </main>
            <?php  include "templates/fragments/footer_blog.php"?>                    
        </body>
</html>
<script src="js/header.js" type="text/javascript"></script>
<script src="js/all.js" type="text/javascript"></script>
