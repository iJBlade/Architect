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
        <title>Articles</title>       
    </head>
        <body>
            <?php include 'templates/fragments/header.php'?>
            <main style="position:absolute;top:60px">
            <div>
                <h1><?php if(estConnecte()){echo"Mon profil";}else{echo"Présentation";} ?></h1>
                    <div style="text-align: center;">
                        <?php if(estConnecte()){ ?>                
                        <a href="#" id="password">Modifier votre mot de passe</a>
                        <a href="#"id="passwordClose" style="display: none;">X</a>
                        <?php include "templates/fragments/update_password.php"; }else{}?>
                    </div>
                    <div style="display: flex;">           
                        <div class="wrapper">
                                <div class="picture">
                                    <img id='profil' src="admin/<?= htmlentities($user->getId())?>.jpg" alt="" width="500px" height="500px">      
                                    <?php if(estConnecte()){include "templates/fragments_photo/ajout_photo/insert_photo_admin.php";}else{} ?>                                         
                                </div>
                        </div>
                        <div>
                            <div>
                                <p><?= $user->getTitre()?></p>
                                <?php if(estConnecte()){ ?>
                                        <a href="#" id="b-t">Modifier le titre de ma présentation</a>
                                        <a href="#" id="bt-1" style="display: none;">X</a>
                                <?php  include "templates/update/titre_profil.php";}else{} ?>
                            </div>
                            <div>
                                <p><?= $user->getPresentation1()?></p>
                                <?php if(estConnecte()){ ?>
                                <a href="#" id="b-p">Modifier le premier contenu de ma présentation</a>
                                <a href="#" id="b-p1" style="display: none;">X</a>
                                <?php include "templates/update/presentation1.php";}else{} ?>            
                            </div>
                            <div>
                                <p><?= $user->getPresentation2() ?></p>
                                <?php if(estConnecte()){ ?>
                                <a href="#" id="b-p2">Modifier le deuxième contenu de ma présentation</a>
                                <a href="#" id="b-p02" style="display: none;">X</a>
                                <?php include "templates/update/presentation2.php";}else{} ?>          
                            </div>  
                        </div>
                    </div>
            </div>       
        </main>
        <script src="js/header.js" type="text/javascript"></script>  
        <script src="js/profil.js" type="text/javascript"></script>  
        <script src="js/update_password.js" type="text/javascript"></script>
    </body>
    </html>
