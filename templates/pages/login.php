<!DOCTYPE html>
<?php // Page où il y a le formulaire de connexion pour administrateur/trice ?>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>  
        <link href="css/style.css" rel="stylesheet" type="text/css"/> 
        <link href="css/header.css" rel="stylesheet" type="text/css"/>
        <link href="css/co.css" rel="stylesheet" type="text/css"/>  
        <link href="css/footer_blog.css" rel="stylesheet" type="text/css"/>
        <title>HOME</title>       
    </head> 
    <body>
        <?php include "templates/fragments/header.php" ?>
        <main>
            <!-- Google Font -->

            <p id="p_anim"><span id="anim">Connexion</span></p>

            <form method="POST" action="dashboard.php">
                <div class="group-form">
                    <input type="email" name="email" class="fat" id="email" required>
                    <label>Email</label>
                </div>
                <div class="group-form">
                    <input type="password" name="password" class="fat" id="password" required>
                    <label>Mot de passe</label>
                </div>
                <div class="group-form">
                    <button type="submit" class="fat-send" id="send-connexion" name="Connexion">Connexion</button>
                    <a href="reset.php" class="forgot-password">Mot de passe oublié ?</a>
                </div>
                <div>
                    <?php if(isset($erreur)){echo $erreur ; }else{}?>
                </div>
            </form>  
        </main> 
        <?php  include "templates/fragments/footer_blog.php"?>                    
        </body>
</html>
<script src="js/header.js" type="text/javascript"></script>
<script src="js/all.js" type="text/javascript"></script>