<!DOCTYPE html>
<?php 
/*
    Page : SHOP , affichage de tous les articles du magasin 
*/ 
?>
    <html>
        <head>
            <meta charset="UTF-8">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>  
            <link href="css/shop.css" rel='stylesheet' type='text/css'>
            <link href="css/header.css" rel='stylesheet' type='text/css'>
            <link href="css/footer_blog.css" rel='stylesheet' type='text/css'>                 
            <title>SHOP</title>       
        </head>
            <body>
                <?php include "templates/fragments/header_shop.php"?>               
                <main style="padding-top:92px">
                    <div id="wrapper">
                        <?php // C'est le logo panier frabriqué manuellement   ?>  
                        <a href="panier.php" style="text-decoration: none;">  
                            <div class="cart-icon-top"></div>
                            <div class="cart-icon-bottom"></div>
                        </a>    
                        <?php // C'est le lien panier qui apparait lorsqu'on ajoute un article au panier  ?>
                        <div id="checkout">
                            <a href="panier.php" style="text-decoration:none;color:gray">PANIER</a>
                        </div>

                        <?php // C'est le panier ?>
                        <div id="sidebar">
                            <!-- JE TRAVAILLE ICI POUR LE PANIER -->
                            <a href="panier.php" style="text-decoration: none;"><h3>PANIER</h3></a>   
                                <div id="carte">
                                    <span class="ok"></span>                   
                                </div>
                        <?php   if (creationPanier()){
                                    $nbArticles=count($_SESSION['panier']['titre']);
                                        if ($nbArticles <= 0){ ?>
                                            <div id="cart">
                                                <span class="empty">Aucun article dans le panier </span>
                                                <span class="ok"></span>                   
                                            </div>
                                        <?php }else{ 
                                            
                                            for ($i=0 ;$i < $nbArticles ; $i++){ ?>
                                                                                       
                                            <div class='cart-item'>
                                                <div class='img-wrap'>
                                                    <img src='photoproduit1/<?= htmlspecialchars($_SESSION['panier']['id_image'][$i]) ?>.jpg' alt='' />
                                                </div>
                                                <span><?= htmlspecialchars($_SESSION['panier']['titre'][$i]) ?></span>
                                                <strong><?= (floatval(htmlspecialchars($_SESSION['panier']['prixProduit'][$i]))) ?> €</strong>
                                                <div class='cart-item-border'></div>
                                            
                                            </div>
                                        <?php } 
                                        }
                        } ?>


 
                        </div>
<?php /************************************************* Selection de la grille : 3x3 ou 2x2 ********************************************************************* */ ?>
                        <div id="grid-selector" style="color:black;font-weight:bold;">
                            <div id="grid-menu">
                                Vue:
                                <ul>           	   
                                    <li class="largeGrid"><a href=""></a></li>
                                    <li class="smallGrid"><a class="active" href=""></a></li>
                                </ul>
                            </div>
                            
                            Résultats
                        </div>
<?php /************************************************* Compartiment de la grille : 3x3 ou 2x2 ********************************************************************* */ ?>  
<?php /*********************************************** Affichage des articles de la base de données ***************************************************************** */ ?>                      

                        <div id="grid">
                        <?php while( $produit=$select->fetch(PDO::FETCH_OBJ)){ ?>
                            <div class="product">
                                <div class="info-large">
                                    <h4><?php echo $produit->titre; ?></h4>
                                    <div class="sku">
                                        PRODUCT SKU: <strong>89356</strong>
                                    </div>             
                                    <div class="price-big">
                                        <span></span><?php echo $produit->final_prix; ?>€
                                    </div>                    
                                    <a href="shopping.php?id=<?php echo $produit->id;?>" class="more" style="/*! margin-top: 69px; *//*! width: 100%; */position: absolute;bottom: 12%;left: 37%;" id="aA">En savoir plus</a>           
                                </div>
                                <div class="make3D">
                                    <div class="product-front">
                                        <div class="shadow"></div>
                                        <img src="photoproduit1/<?= htmlentities($produit->id)?>.jpg" alt="<?php echo $produit->id; ?>" />
                                        <div class="image_overlay"></div>
                                        
                                        <div class="add_to_cart"><a class="aCard">AJOUTER AU PANIER</a></div>                
                                        <div class="view_gallery">PHOTO</div>                 
                                        <div class="stats">        	
                                            <div class="stats-container">
                                                <span class="product_price"><?php echo $produit->final_prix; ?>€</span>
                                                <span class="product_name"><?php echo $produit->titre; ?></span>    
                                                <a href="shopping.php?id=<?php echo $produit->id;?>" class="more" style="padding-top:50px;" id="aA">En savoir plus</a>                                            
                                
                                            </div>                         
                                        </div>
                                    </div>
                                    
                                    <div class="product-back">
                                        <div class="shadow"></div>
                                        <div class="carousel">
                                            <ul class="carousel-container">
                                                <li><img src="photoproduit1/<?= htmlentities($produit->id)?>.jpg" /></li>
                                                <li><img src="photoproduit2/<?= htmlentities($produit->id)?>.jpg" /></li>
                                                <li><img src="photoproduit3/<?= htmlentities($produit->id)?>.jpg" /></li>
                                            </ul>
                                            <div class="arrows-perspective">
                                                <div class="carouselPrev">
                                                    <div class="y"></div>
                                                    <div class="x"></div>
                                                </div>
                                                <div class="carouselNext">
                                                    <div class="y"></div>
                                                    <div class="x"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flip-back">
                                            <div class="cy"></div>
                                            <div class="cx"></div>
                                        </div>
                                    </div>	  
                                </div>	
                            </div>
                        <?php } ?>                                                    
                        </div>
                    </div>
                </main>
                <?php include "templates/fragments/footer.php" ?>
                <script src="js/shop.js" type="text/javascript"></script>
                <script src="js/header.js" type="text/javascript"></script>
            </body>
    </html>