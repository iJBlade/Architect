<!DOCTYPE html>
<?php // page qui affiche l'chronique a modifier ?>
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
        <link href="css/update_art.css" rel="stylesheet" type="text/css"/>                           
        <?php  foreach ($resultat as $chronique){ ?>                          
        <title>Modification - <?= htmlentities($chronique->getTitre()) ?></title>      
        <?php } ?>       
    </head>
        <body>
            <?php include 'templates/fragments/header.php'?>
            <main style="height:1800px;">
                <div>
                    <?php  foreach ($resultat as $chronique){ ?>
                            <div style="position: absolute;top: 10%;z-index: 10;left: 25%;">
                                <div>
                                    <h1><?= htmlentities($chronique->getTitre())?><a id="b0">Modifier le titre</a></h1><!-- titre  php-->                           
                                    <button id="b01">X</button>
                                </div>                   
                                <?php include "templates/update/titre_chronique.php"?>                           
                            </div>
                            <div style="display:flex">
                                <div class="wrapper">
                                    <div class="picture">
                                        <img src="photochronique1/<?= htmlentities($chronique->getId())?>.jpg"  width="500px" height="500px" />
                                        <?php include "templates/fragments_photo/ajout_photo/insert_photo_chronique.php"?>    
                                    </div> 
                                </div>
                                <div class="wrap">
                                    <div class="picture">
                                        <img src="photochronique2/<?= htmlentities($chronique->getId())?>.jpg" width="500px" height="500px"/>
                                        <?php include "templates/fragments_photo/ajout_photo/insert_photo_chronique2.php"?> 
                                    </div>
                                </div>  
                                <div class="wraper">
                                    <div class="picture">
                                        <img src="photochronique3/<?= htmlentities($chronique->getId())?>.jpg" width="500px" height="500px"/>
                                        <?php include "templates/fragments_photo/ajout_photo/insert_photo_chronique3.php" ?>                         
                                    </div>
                                </div> 

                            </div>
                            <div style="position: absolute;top: 70%;width: 1623px;margin : 0 auto;left: 9%;">
                                <div>
                                    <div>
                                        <p id="Up"><?= nl2br(htmlentities($chronique->getContenu()))?><a id="b1">Modifier le contenu n°1</a></p><!-- titre  contenu-->   
                                        <button id="b1-1">X</button>
                                    </div>                   
                                    <?php include "templates/update/chronique1.php"?>                           
                                </div>    
                                <div>
                                    <div>
                                        <p id="Up"><?= nl2br(htmlentities($chronique->getContenu2()))?><a id="b2">Modifier le contenu n°2</a></p><!-- titre  contenu-->                             
                                        <button id="b2-1">X</button>
                                    </div>                   
                                    <?php include "templates/update/chronique2.php"?>                           
                                </div>                     
                                <div>
                                    <div>
                                        <p id="Up"><?= nl2br(htmlentities($chronique->getContenu3()))?><a id="b3">Modifier le contenu n°3</a></p><!-- titre  contenu-->                                  
                                        <button id="b3-1" style="display: none;">X</button>
                                    </div>                   
                                    <?php  include "templates/update/chronique3.php"?>                           
                                </div>                       
                                <div>
                                    <div>
                                        <p id="Up"><?= nl2br(htmlentities($chronique->getContenu4()))?><a id="b4">Modifier le contenu n°4</a></p><!-- titre  contenu-->                             
                                        <button id="b4-1" style="display: none;">X</button>
                                    </div>                   
                                    <?php include "templates/update/chronique4.php"?>                           
                                </div>       
                                <div>
                                    <a href="delete.php?chronique=<?=$chronique->getId()?>">Supprimer cet article ? </a>   
                                    <a href="online.php?chronique=<?=$chronique->getId()?>">Mettre cet article en ligne? </a>
                                    <a href="dashboard_offline.php?chronique=<?=$chronique->getId()?>">Aperçu?</a>                  
                                </div>           
                            </div>
                                                            
                    <?php } ?>
                </div>
            </main>
            <?php  include "templates/fragments/footer.php"?>                    
        </body>
</html>
<script src="js/header.js" type="text/javascript"></script>
<script src="js/all.js" type="text/javascript"></script> 