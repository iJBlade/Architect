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
            <link rel="stylesheet" href="css/payment.css">
            <link href="css/footer_blog.css" rel="stylesheet" type="text/css"/>                
            <title>Paiement</title>       
        </head>
        <body>
          <?php include "templates/fragments/header.php"?>
          <main style="padding-top:150px;">
            <div class="card-container">
              <div class="card-wrapper"></div>
              <div class="form-container">
                <form action="payment.php" style="padding: 35px;">
                  <label for="number">Numéro de la carte</label>
                  <input placeholder="XXXX  XXXX  XXXX  XXXX" type="text" name="number">
                  <label for="name">Nom</label>
                  <input placeholder="Full Name" type="text" name="name"><br>

                  <div class="cardForm-Field50">
                    <label for="expiry">Date d'expiration</label><rb>
                    <input placeholder="MM/YY" type="text" name="expiry" class="secondRow">
                  </div>
                  <div class="cardForm-Field50">
                    <label for="cvc">Code de sécurité</label><br>
                    <input placeholder="XXX" type="text" name="cvc" class="secondRow incorrectInfo">
                  </div>
              <!-- Button Pay -->
                  <input type="submit" value="Payer <?php echo $_GET["mt"] ?>€" class="button CardGood">

                </form>
              </div>
            </div>
          </main>
          <?php include "templates/fragments/footer.php" ?>
        </body>
        <script src="js/header.js" type="text/javascript"></script>  
        <script src="js/payment.js" type="text/javascript"></script>
    </html>    

