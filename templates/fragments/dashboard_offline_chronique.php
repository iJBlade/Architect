<?php 

/*                                              Fragment : Détail article HORS ligne côté ADMIN                                                    */
/*
        Param : Récupérer le détail d'un article HORS LIGNE selon leur id et leur statut;
        Retour : détail article -> $id; $categorie;
 
*/ 

?> 
<!DOCTYPE html>
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
        <title><?= htmlentities($chronique->getTitre())?></title>       
    </head>
    <body>
        <?php include 'templates/fragments/header.php'?>
    <body>
        <main style="position:absolute;top:60px;width:100%; ">
        
        <?php foreach($resultat as $chronique){ ?> 
                <div id="top_column">
                    <h1>Aperçu de l'article <span>hors ligne</span>.</h1>
                    <p>Note : Cette page est l'aperçu de ce que la(e) visitrice(eur) voit lorsqu'il/elle consulte cet article.</p>
                </div>   
                <div id="medium_column"style="display:flex;">
                    <div id="medium_column2">
                        <div id="medium_column_parent">
                                <div id="medium_child">
                                <p id="p_anim"><a id="anim" href="#">Portfolio</a></p><!-- titre  php-->
                                </div>
                                <div id="medium_child2">
                                    <h1><?= htmlentities($chronique->getTitre())?></h1>
                                    <div id="border"></div>
                                    <p><?= htmlentities($chronique->getContenu())?></p><!-- titre  contenu-->   
                                    <p><?= htmlentities($chronique->getContenu2())?></p><!-- titre  contenu-->   
                                    <p><?= htmlentities($chronique->getContenu3())?></p><!-- titre  contenu-->   
                                    <p><?= htmlentities($chronique->getContenu4())?></p><!-- titre  contenu-->   
                                </div>                                   
                        </div> 
                        <div id="medium_column_parent2">
                                    <a href="delete.php?chronique=<?=$chronique->getId()?>" >Supprimer cet article ? </a><br>
                                    <a href="online.php?chronique=<?=$chronique->getId()?>" >Mettre cet article en ligne ? </a><br>
                                    <a href="update.php?chronique=<?=$chronique->getId()?>" >Modifier cet article ?</a>                
                        </div> 
                    </div>                            
                    <div id="slider">                                                         
                        <img src="photochronique1/<?= htmlentities($chronique->getId())?>.jpg" class="slide1" />                                     
                        <img src="photochronique2/<?= htmlentities($chronique->getId())?>.jpg" class="slide2" />                                                                         
                        <img src="photochronique3/<?= htmlentities($chronique->getId())?>.jpg" class="slide3" />                                     
                    </div>
                </div>
                <?php } ?>
        </main>
        <?php  include "templates/fragments/footer.php"?>                    
    </body>
</html>
<script src="js/header.js" type="text/javascript"></script>
<script src="js/all.js" type="text/javascript"></script>