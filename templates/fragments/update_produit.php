<!DOCTYPE html>
<?php // page qui affiche l'produit a modifier ?>
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
        <?php  foreach ($ligne as $produit){ ?>                          
        <title>Modification - <?= htmlentities($produit->getTitre()) ?></title>      
        <?php } ?> 
    </head>
        <body>
            <?php include 'templates/fragments/header.php'?>
            <main style="height:1800px;">
                <div>
                    <?php  foreach ($ligne as $produit){ ?>
                            <div style="position: absolute;top: 10%;z-index: 10;left: 44%;">
                                <div>
                                    <h1><?= htmlentities($produit->getTitre())?><a id="b0">Modifier le titre</a></h1><!-- titre  php-->                           
                                    <button id="b01" style="display: none; font-size: 20px;border: none;background-color: transparent;color: red;cursor:pointer;">X</button>
                                </div>                   
                                <?php include "templates/update/titre.php"?>                           
                            </div>
                            <div style="display:flex">
                                <div class="wrapper">
                                    <div class="picture">
                                        <img id='profil' src="photoproduit1/<?= htmlentities($produit->getId())?>.jpg" width="500px" height="500px">      
                                        <?php include "templates/fragments_photo/ajout_photo/insert_photo3_produit.php"?>       
                                    </div> 
                                </div>
                                <div class="wrap">
                                    <div class="picture">
                                        <img id='profil' src="photoproduit2/<?= htmlentities($produit->getId())?>.jpg" width="500px" height="500px">      
                                        <?php include "templates/fragments_photo/ajout_photo/insert_photo3_produit.php"?>   
                                    </div>
                                </div>  
                                <div class="wraper">
                                    <div class="picture">
                                        <img id='profil' src="photoproduit3/<?= htmlentities($produit->getId())?>.jpg" width="500px" height="500px">      
                                        <?php include "templates/fragments_photo/ajout_photo/insert_photo3_produit.php"?>                          
                                    </div>
                                </div> 

                            </div>
                            <div style="position: absolute;top: 70%;width: 1623px;margin : 0 auto;left: 9%;">
                                <div>
                                    <div>
                                        <p id="Up"><?= nl2br(htmlentities($produit->getContenu())) ?><a id="b1">Modifier le contenu n°1</a></p><!-- titre  contenu-->   
                                        <button id="b1-1">X</button>
                                    </div>                   
                                    <?php include "templates/update/prod.php"?>                           
                                </div>    
                                <div>
                                    <div>
                                        <p id="Up"><?= nl2br(htmlentities($produit->getContenu2()))?><a id="b2">Modifier le contenu n°2</a></p><!-- titre  contenu-->                             
                                        <button id="b2-1">X</button>
                                    </div>                   
                                    <?php include "templates/update/prod2.php"?>                           
                                </div>                     
                                <div>
                                    <div>
                                        <p id="Up"><?= htmlentities($produit->getFinal_Prix())?>€<span id="ttc">/TTC</span><a id="b3">Modifier le prix</a></p><!-- titre  contenu-->                                  
                                        <button id="b3-1" style="display: none;">X</button>
                                    </div>                   
                                    <?php include "templates/update/prix.php"?>                           
                                </div>                             
                                <div>
                                    <a href="delete.php?prod=<?=$produit->getId()?>">Supprimer ce produit ? </a>   
                                    <a href="online.php?prod=<?=$produit->getId()?>">Mettre ce produit en ligne? </a>
                                    <a href="dashboard_offline.php?prod=<?=$produit->getId()?>">Aperçu?</a>                  
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