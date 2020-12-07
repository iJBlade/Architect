           <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>  
    <?php  
            if (creationPanier())
                        {
                           $nbArticles=count($_SESSION['panier']['titre']);
                           if ($nbArticles <= 0)
                           echo "<tr><td style='color:red;font-size:20px;'>Oups, votre panier est vide ! </ td></tr>";
                           else
                           { ?>
              <div class="form-container">
              <form method="post" action="commande.php"  style="position: absolute;left: 14%; top: 5%;" >
                   <input type="text" name="adresse" id="card-adress" class="adress" placeholder="42 rue la mulatière , Paris 75000 "  >
                    <input type="email" name="email" id="card-email" class="email" placeholder="Email " >
                    <input type="text" name="prix" id="prix" name="prix" value="<?= MontantGlobal() ?>">
                    <input type="text" name="nom" id="cardholder-name" class="cardholder-name" placeholder="Titulaire de la carte" >
                    <button class="card-button">Ici</button>
                    <div id="message2"></div>
                    
                  </form>
              </div>
            </div>
            <?php }
                    }
                ?>