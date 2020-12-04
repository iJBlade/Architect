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
        <link href="css/payment.css" rel="stylesheet" type="text/css">

        <link href="css/footer_blog.css" rel="stylesheet" type="text/css"/>                
        <title>Paiement</title>       
    </head>
    <body>
      <?php include "templates/fragments/header_shop.php"?>
      <main style="padding-top:150px;    margin-bottom: 145px;">
      <div class="card-container">
      
              <div class="form-container">
                <form method="post" style="position: absolute;
    left: 14%;
    top: 5%;" >

                    <div id="errors"></div> 
                    <input type="text" name="adress" id="card-adress" placeholder="Email">
                    <input type="email" name="email" id="card-email" placeholder="42 rue la mulatière , Lyon 69000 " required>
                    <input type="text" id="cardholder-name" placeholder="Titulaire de la carte">
                    <div id="card-elements"></div> 
                    <div id="card-errors" role="alert"></div>
                    <button id="card-button" type="button" data-secret="<?= $intent["client_secret"]?>" value="Payer" class="card-button">

                  
                  

                </form>
              </div>
            </div>

      </main>
      <?php include "templates/fragments/footer.php" ?>
    </body>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="js/scripts.js" type="text/javascript"></script>  
    <script src="js/header.js" type="text/javascript"></script>  
    <script src="js/payment.js" type="text/javascript"></script>
</html>    

