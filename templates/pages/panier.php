<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
   <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
      <head>
         <meta charset="UTF-8">
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
         <script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
         <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>           
         <script src="https://www.paypalobjects.com/api/checkout.js"></script>
         <link href="css/style.css" rel="stylesheet" type="text/css"/> 
         <link href="css/frag.css" rel="stylesheet" type="text/css"/>
         <link href="css/header.css" rel="stylesheet" type="text/css"/>  
         <link href="css/footer_blog.css" rel="stylesheet" type="text/css"/> 
         <title>Votre panier</title>
      </head>
         <body>
            <?php include 'templates/fragments/header_shop.php' ?>
            <main style="position: absolute;width: 100%;top: 15%;    margin-bottom: 145px;">
               <div>
                  <form method="post" action="panier.php">
                     <table style="width: 1500px;margin: 0 auto;">
                        <tr style="/*! background-color: yellow; */text-align: center;">
                           <td colspan="12" style="/*! width: 120px; */height: 120px;font-size: 25px;"><h3>Votre panier</h3></td>
                        </tr>
                        <tr style="/*! background-color: pink; */font-size: 25px;height: 56px;border-bottom: 7px solid black;box-sizing: border-box;">
                           <td></td>
                           <td>Libellé</td>
                           <td>Quantité</td>
                           <td>Prix Unitaire<span style="font-size:14px;color:grey;">/TTC</span></td>
                           <td>Total</td>
                           <td></td>
                        </tr>  

                        <?php
                        if (creationPanier())
                        {
                           $nbArticles=count($_SESSION['panier']['titre']);
                           if ($nbArticles <= 0)
                           echo "<tr><td style='color:red;font-size:20px;'>Oups, votre panier est vide ! </ td></tr>";
                           else
                           {
                              for ($i=0 ;$i < $nbArticles ; $i++)
                              {
                                 
                                 echo "<tr style='/*! background-color: red; */height: 120px;font-size: 25px;'>";
                                 echo "<td><img src='photoproduit1/".htmlspecialchars($_SESSION['panier']['id_image'][$i]).".jpg' width='75px' height='40px' style='padding-left:15px;margin:12px;'></td>";
                                 echo "<td>".htmlspecialchars($_SESSION['panier']['titre'][$i])."</ td>";
                                 echo "<td><input type=\"text\" size=\"4\" name=\"q[]\" value=\"".htmlspecialchars($_SESSION['panier']['qteProduit'][$i])."\"/></td>";
                                 echo "<td>".(floatval(htmlspecialchars($_SESSION['panier']['prixProduit'][$i])))."€</td>";
                                 echo "<td>".htmlspecialchars($_SESSION['panier']['prixProduit'][$i]) * htmlspecialchars($_SESSION['panier']['qteProduit'][$i])."€</td>";
                                 echo "<td><a href=\"".htmlspecialchars("panier.php?action=suppression&l=".rawurlencode($_SESSION['panier']['titre'][$i]))."\"><svg class='svg-icon' viewBox='0 0 20 20' width='25px' fill='black'>
                                 <path d='M17.114,3.923h-4.589V2.427c0-0.252-0.207-0.459-0.46-0.459H7.935c-0.252,0-0.459,0.207-0.459,0.459v1.496h-4.59c-0.252,0-0.459,0.205-0.459,0.459c0,0.252,0.207,0.459,0.459,0.459h1.51v12.732c0,0.252,0.207,0.459,0.459,0.459h10.29c0.254,0,0.459-0.207,0.459-0.459V4.841h1.511c0.252,0,0.459-0.207,0.459-0.459C17.573,4.127,17.366,3.923,17.114,3.923M8.394,2.886h3.214v0.918H8.394V2.886z M14.686,17.114H5.314V4.841h9.372V17.114z M12.525,7.306v7.344c0,0.252-0.207,0.459-0.46,0.459s-0.458-0.207-0.458-0.459V7.306c0-0.254,0.205-0.459,0.458-0.459S12.525,7.051,12.525,7.306M8.394,7.306v7.344c0,0.252-0.207,0.459-0.459,0.459s-0.459-0.207-0.459-0.459V7.306c0-0.254,0.207-0.459,0.459-0.459S8.394,7.051,8.394,7.306'></path>
                              </svg></a></td>";
                                 echo "</tr>";
                              }

                              echo "<tr>";
                              echo "<td colspan=\"4\"></td>";
                              echo "<td colspan=\"2\" style='padding: 28px 0px;font-size:25px;'>";
                              echo "Total :" .MontantGlobal(). "€<span style='font-size:14px;color:gray;'>/TTC</span>"; 
                              echo"<br>"; 
                              echo "<input type=\"submit\" value=\"Rafraichir\" class=\"reload\"/><input type=\"hidden\" name=\"action\" value=\"refresh\"/>";                        
                              echo "</td>";
                              echo "</tr>";

                           }
                        }
                        ?>
                     </table>
                  </form>

                   <form action="paiement.php" method="post" style="padding-bottom:125px;">
                     <input type="hidden" name="prix" id="prix" value="<?php echo MontantGlobal() ?>">
                     <div class="svg-wrapper" style="padding-top:20px;">
                        <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
                           <rect class="shape" height="60" width="320" />
                        </svg>
                           <div class="text"><button style="text-decoration: none;color: black;background-color: white;border: none;cursor: pointer;font-family: 'Roboto Condensed';font-size: 22px;letter-spacing: 4px;line-height: 26px;" >Paiement</button></div>
                     </div>                      
                   </form>        

               </div>
            </main>
            <?php include "templates/fragments/footer.php" ?>
         </body>
      <script src="js/header.js" type="text/javascript"></script>
      <script src="js/frag.js" type="text/javascript"></script>
</html>