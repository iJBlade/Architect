<?php

    if(isset($_POST["prix"]) && !empty($_POST["prix"])){
        require_once("vendor/autoload.php");
        $prix =(float)$_POST["prix"];

        // On instancie Stripe
        //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
     
        \Stripe\Stripe::setApiKey('sk_test_51HmHUZKxldL9XsGAH5n9gm92Lxz9VKlUURDnY9gByLku5Rxfo1zD4eLDcw6gV0qZNS9f4crB7eCKdnXdEeUWt7nu002fwxWeAG');
        $intent = \Stripe\PaymentIntent::create([
            'amount' => $prix*100,
            'currency' => 'eur'
        ]) ;
      }else{
        header("Location:panier.php");
      }

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
            <link href="css/presentation.css" rel="stylesheet" type="text/css"/> 
            <link href="css/payment.css" rel="stylesheet" type="text/css">
            <link href="css/footer_blog.css" rel="stylesheet" type="text/css"/>   
            <link rel="stylesheet" href="https://use.typekit.net/qgy5yjv.css">       

            <title>Paiement</title>       
        </head>
        <body>
          <?php include "templates/fragments/header_shop.php"?> 
          <main>
              <div class="card-container">
                <div class="form-container">
                  <form method="post" style="position: absolute;left: 14%; top: 5%;" >
                    <div id="errors" style="font-size: 18px;color:darkred;"></div>
                    <input type="text" name="address" id="card-adress" placeholder="42 rue la mulatière , Paris 75000 " required >
                    <input type="email" name="email" id="card-email" placeholder="Email " required>
                    <input type="text" id="cardholder-name" placeholder="Titulaire de la carte" required>
                    <div id="card-elements"></div> 
                    <div id="card-errors" role="alert"></div>
                    <button id="card-button" type="button" data-secret="<?= $intent["client_secret"]?>" value="Payer" class="card-button">Procéder au paiement</button>
                  </form>
                </div>
              </div>
              <div id="summary_ordered">
                <div style="border-bottom: 1px solid #f3f3ff;">
                  <h2 style="text-align: left;margin: 20px;color:gray">Résumé de votre panier</h2>
                </div>
                <div style="overflow-y: scroll;height: 550px;">
                 
             
                  <?php
                        if (creationPanier())
                        {
                           $nbArticles=count($_SESSION['panier']['titre']);
                           if ($nbArticles <= 0)
                           echo "<tr><td style='color:red;font-size:20px;'>Oups, votre panier est vide ! </ td></tr>";
                           else
                           {
                              for ($i=0 ;$i < $nbArticles ; $i++)
                              { ?>
                              <div style="display: flex;width: 100%;font-size: 20px;margin: 24px auto;">
                                  <div style="display: inline-flex;width: 60%;float: left;">
                                    <img src='photoproduit1/<?= htmlspecialchars($_SESSION['panier']['id_image'][$i]) ?>.jpg' width='75px' height='40px'style="padding-left:15px;border-radius: 4px;">
                                    <p style="padding-left: 6px;"><?= htmlspecialchars($_SESSION['panier']['titre'][$i]) ?></p>
                                  </div>
                                  <div style="display: inline-flex;width: 25%;">
                                    <p style="padding-right: 16px;color:gray"><?php echo htmlspecialchars($_SESSION['panier']['qteProduit'][$i]) ?> x <?php echo htmlspecialchars($_SESSION['panier']['prixProduit'][$i]) ?> €</p>                                                              
                                  </div>
                                  <div style="display: inline-flex;width: 15%;">
                                    <p><?php  echo htmlspecialchars($_SESSION['panier']['prixProduit'][$i]) * htmlspecialchars($_SESSION['panier']['qteProduit'][$i]) ?>€</p>  
                                  </div>
                              </div>
          
                            <?php  } ?>
                </div>
                <div id="summary_ordered_bottom" >
                    <div style="border: 1px solid #f3f3ff;border-left: none;border-right: none;">
                      <div style="margin: 10px;"><span style="color:gray;">Sous total :</span> <?= MontantGlobal() ?> € </div>
                      <div style="margin: 10px;"><span style="color:gray;">Livraison :</span> Gratuite </div>
                    </div>
                    <div>
                      <div style="margin: 30px 10px;"><span style="color:gray;">Total :</span> <?= MontantGlobal() ?> €<span style="font-size: 15px;">/TTC</span></div>   
                    </div>
                </div>
                <?php }
                    }
                ?>
              </div>

          </main>
          <?php include "templates/fragments/footer.php" ?>
        </body>
        <script src="https://js.stripe.com/v3/"></script>
        <script src="js/scripts.js" type="text/javascript"></script>  
        <script src="js/header.js" type="text/javascript"></script>  
        <script src="js/payment.js" type="text/javascript"></script>
    </html>    

