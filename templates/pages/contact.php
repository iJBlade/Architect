<!DOCTYPE html>
<?php // page contact  ?>
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
        <link href="css/contact.css" rel="stylesheet" type="text/css"/>                
        <title>Contact</title>       
    </head>
        <body>
        <?php include "templates/fragments/header.php"?>
            <main>
                <div id="_1">
                    <div id="_2">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83998.94722610422!2d2.2770206011674197!3d48.858837739583414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!5e0!3m2!1sfr!2sfr!4v1603824004362!5m2!1sfr!2sfr" 
                        width="800" height="800" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div id="_3"> 
                        <h1>Contacts</h1>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum</p>
                        <p>ADDRESS 27th Brooklyn New York, NY 10065</p>
                        <p>E-MAIL yourmail@domain.com</p>
                        <button data-hover="⟶" id="open_form"><div>Contactez-moi</div></button>
                    </div>
                    <div id="_4">
                        <a id="close_form">X</a>
                        <form method="POST" action="spacemember.php">
                            <div class="group-form">
                                <input type="text" name="nom" class="fat"  required>
                                <label>Nom</label>
                            </div>
                            <div class="group-form">
                                <input type="email" name="email" class="fat" required>
                                <label>Email</label>
                            </div>
                            <div class="group-form">
                                <textarea type="text" name="message" placeholder="Message" required></textarea>                               
                            </div>
                            <div class="group-form">
                                <button type="submit" class="fat-send">Envoyer</button>
                            </div>
                            <div>
                                <?php if(isset($erreur)){echo $erreur ; }else{}?>
                            </div>
                        </form> 
                    </div>
                </div>
            </main>
            <?php  include "templates/fragments/footer_blog.php"?>                    
        </body>
</html>
<script>
        $("#open_form").click(function(){
            $("#_4").slideDown(500, "linear");
        });
        $("#close_form").click(function(){
            $("#_4").slideUp(500, "linear");
        });
        
</script>
<script src="js/header.js" type="text/javascript"></script>
<script src="js/all.js" type="text/javascript"></script>