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
                        <h1>Contact</h1>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum</p>
                        <p><svg class="svg-icon" viewBox="0 0 20 20">
							<path d="M10,1.375c-3.17,0-5.75,2.548-5.75,5.682c0,6.685,5.259,11.276,5.483,11.469c0.152,0.132,0.382,0.132,0.534,0c0.224-0.193,5.481-4.784,5.483-11.469C15.75,3.923,13.171,1.375,10,1.375 M10,17.653c-1.064-1.024-4.929-5.127-4.929-10.596c0-2.68,2.212-4.861,4.929-4.861s4.929,2.181,4.929,4.861C14.927,12.518,11.063,16.627,10,17.653 M10,3.839c-1.815,0-3.286,1.47-3.286,3.286s1.47,3.286,3.286,3.286s3.286-1.47,3.286-3.286S11.815,3.839,10,3.839 M10,9.589c-1.359,0-2.464-1.105-2.464-2.464S8.641,4.661,10,4.661s2.464,1.105,2.464,2.464S11.359,9.589,10,9.589"></path>
						</svg>Paris</p>
                        <p><svg class="svg-icon" viewBox="0 0 20 20">
							<path d="M18.303,4.742l-1.454-1.455c-0.171-0.171-0.475-0.171-0.646,0l-3.061,3.064H2.019c-0.251,0-0.457,0.205-0.457,0.456v9.578c0,0.251,0.206,0.456,0.457,0.456h13.683c0.252,0,0.457-0.205,0.457-0.456V7.533l2.144-2.146C18.481,5.208,18.483,4.917,18.303,4.742 M15.258,15.929H2.476V7.263h9.754L9.695,9.792c-0.057,0.057-0.101,0.13-0.119,0.212L9.18,11.36h-3.98c-0.251,0-0.457,0.205-0.457,0.456c0,0.253,0.205,0.456,0.457,0.456h4.336c0.023,0,0.899,0.02,1.498-0.127c0.312-0.077,0.55-0.137,0.55-0.137c0.08-0.018,0.155-0.059,0.212-0.118l3.463-3.443V15.929z M11.241,11.156l-1.078,0.267l0.267-1.076l6.097-6.091l0.808,0.808L11.241,11.156z"></path>
						</svg>mariemzn.deco@gmail.com</p>
                        <button data-hover="⟶" id="open_form"><div>Contactez-moi</div></button>
                    </div>
                    <div id="_4">
                        <a id="close_form">X</a>
                        <form method="POST" action="">
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
                                <button type="submit" class="fat-send" name="mailform">Envoyer</button>
                            </div>
                            <div>
                                <?php if(isset($erreur)){echo $erreur ; }else{}?>
                            </div>
                        </form> 
                    </div>
                </div>
            </main>
            <?php  include "templates/fragments/footer.php"?>                    
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