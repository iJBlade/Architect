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
        <title><?= htmlentities($article->getTitre())?></title>       
    </head>
    <body>
        <?php include 'templates/fragments/header.php'?>
    <body>
        <main style="position:absolute;top:60px;left:25px; ">
        
        <?php foreach($lignes as $article){ ?>    
                <h1>Aperçu de l'article <span>hors ligne</span>.</h1>
                <p>Note : Cette page est l'aperçu de ce que la(e) visitrice(eur) voit lorsqu'il/elle consulte cet article.</p>
                <div style="display:flex;">
                    <div style="width:250px;height:1500px;background-color:white;">
                        <div style="width:100%;margin: 52px 0px;font-size: 15px; text-align:initial;">
                                <div style="border-top: 1px solid black; border-bottom: 1px solid black; padding:25px 0px;">
                                <h4 style="text-align: center;"> <?= htmlentities($article->getTitre())?></h4><!-- titre  php-->
                                </div>
                                    
                                    <p><?= htmlentities($article->getContenu())?><!-- titre  contenu-->   
                                    <p><?= htmlentities($article->getContenu2())?><!-- titre  contenu-->   
                                    <p><?= htmlentities($article->getContenu3())?><!-- titre  contenu-->   
                                    <p><?= htmlentities($article->getContenu4())?><br><!-- titre  contenu--> 

                        </div> 
                        <div style="width:100%;">
                                    <a href="delete.php?id=<?=$article->getId()?>" style="font-size:15px; text-decoration:none;">Supprimer cet article ? </a><br>
                                    <a href="online.php?id=<?=$article->getId()?>" style="font-size:15px; text-decoration:none;"> Mettre cet article en ligne ? </a><br>
                                    <a href="update.php?id=<?=$article->getId()?>" style="font-size:15px; text-decoration:none;">Modifier cet article ?</a>                
                        </div> 

                    </div>      


                        
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


                </div>




                <?php } ?>
                </main>
            <?php  include "templates/fragments/footer_blog.php"?>                    
        </body>
</html>
<script src="js/header.js" type="text/javascript"></script>
<script src="js/all.js" type="text/javascript"></script>