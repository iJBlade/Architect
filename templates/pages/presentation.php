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
            <link href="css/presentation.css" rel="stylesheet" type="text/css"/> 
            <link href="css/footer_blog.css" rel="stylesheet" type="text/css"/>                
            <title>About</title>       
        </head>
            <body>
                <?php include 'templates/fragments/header.php'?>
                <main style="position:absolute;top:60px;height:900px;">
                        <div style="position: absolute;left: 150%;z-index: 20;width: 187%;">
                            <h1><?= $user->getTitre()?></h1>
                            <?php if(estConnecte()){ ?>
                                    <a href="#" id="b-t">Modifier le titre de ma présentation</a>
                                    <button href="#" id="bt-1" style="display: none;">X</button>
                            <?php  include "templates/update/titre_profil.php";}else{} ?>
                        </div>    
                        <div style="display: flex;">           
                            <div class="wrapper">
                                    <div class="picture">
                                        <img id='profil' src="admin/<?= htmlentities($user->getId())?>.jpg" alt="" width="500px" height="800px">      
                                        <?php if(estConnecte()){include "templates/fragments_photo/ajout_photo/insert_photo_admin.php";}else{} ?>                                         
                                    </div>
                            </div>  
                            <div>
                                <div  style=" height:800px; width:1400px;position: absolute;left:100%;" id="black">
                                    <div id="dpp1">
                                        <p id="p_p"><?= nl2br($user->getPresentation1())?></p>
                                        <?php if(estConnecte()){ ?>
                                        <a id="b-p">Modifier le premier contenu de ma présentation</a>
                                        <button href="#" id="b-p1" style="display: none;">X</button>
                                        <a id="password">Modifier mon mot de passe </a>
                                        <button href="#" id="passwordClose" style="display: none;">X</button>
                                        <?php include "templates/update/presentation1.php";
                                            include "templates/fragments/update_password.php";  
                                            }else{} ?>            
                                    </div>
                                </div>
                                <div style="display:none; height:800px; width:1400px;position: absolute;left: 100%;" id="yell">
                                    <div id="dpp2">
                                        <p id="p_p"><?= nl2br($user->getPresentation2()) ?></p>
                                        <?php if(estConnecte()){ ?>
                                        <a href="#" id="b-p2">Modifier le deuxième contenu de ma présentation</a>
                                        <button href="#" id="b-p02" style="display: none;">X</button>
                                        <?php include "templates/update/presentation2.php";}else{} ?>          
                                    </div>                                            
                                </div>
                                <div style="display:flex;position: absolute;bottom: 14%;right: -140%;z-index: 10;">

                                    <a id="desc1" style="font-size:25px;"><</a>
                                    <a id="desc2" style="font-size:25px">></a>
                                </div>    
                            </div>                        
                        </div>       
                </main>
                <?php include "templates/fragments/footer.php" ?>
            </body>
            <script src="js/header.js" type="text/javascript"></script>  
            <script src="js/profil.js" type="text/javascript"></script>  
            <script src="js/update_password.js" type="text/javascript"></script>
    </html>
