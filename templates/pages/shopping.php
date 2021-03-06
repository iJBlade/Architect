<!DOCTYPE html>
<?php 
/*
    Page : Détail d'un produit du site drop shipping Marie Manzano
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
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>     
            <link href="css/fragment.css" rel='stylesheet' type='text/css'>
            <link href="css/header.css" rel='stylesheet' type='text/css'>
            <link href="css/footer_blog.css" rel='stylesheet' type='text/css'>                 
            <title>SHOPPING</title>       
        </head>
            <body>
              <?php  include "templates/fragments/header_shop.php" ?>
              <main style="padding-top: 40px;">
                <section aria-label="Main content" role="main" class="product-detail">
                  <div itemscope itemtype="http://schema.org/Product">
                      <meta itemprop="url" content="">
                      <meta itemprop="image" content="">
                      <div class="shadow">
                      <?php while( $produit=$select->fetch(PDO::FETCH_OBJ)){ ?>
                        <div class="_cont detail-top">
                          <div class="cols">
                            <div class="left-col">
                              <div class="thumbs">
                                <a class="thumb-image active">
                                  <span><img src="photoproduit1/<?= htmlentities($produit->id)?>.jpg" alt="photoproduit1/<?= htmlentities($produit->titre)?>" onclick="document.getElementById('img_select').src='photoproduit1/<?= htmlentities($produit->id)?>.jpg'"></span>
                                </a>
                                <a class="thumb-image">
                                  <span><img src="photoproduit2/<?= htmlentities($produit->id)?>.jpg" alt="photoproduit2/<?= htmlentities($produit->titre)?>" onclick="document.getElementById('img_select').src='photoproduit2/<?= htmlentities($produit->id)?>.jpg'" ></span>
                                </a>
                                <a class="thumb-image">
                                  <span><img src="photoproduit3/<?= htmlentities($produit->id)?>.jpg" alt="photoproduit3/<?= htmlentities($produit->titre)?>" onclick="document.getElementById('img_select').src='photoproduit3/<?= htmlentities($produit->id)?>.jpg'"></span>
                                </a>
                                
                              </div>
                              <div class="big">
                                <img  id="img_select" src="photoproduit1/<?= htmlentities($produit->id)?>.jpg" ></img>
                                <div id="banner-gallery" class="swipe">
                                  <div class="swipe-wrap">
                                    <img src=" photoproduit1/<?= htmlentities($produit->id)?>.jpg"></img>
                                    <img src=" photoproduit2/<?= htmlentities($produit->id)?>.jpg" ></img>
                                    <img src=" photoproduit3/<?= htmlentities($produit->id)?>.jpg" ></img>
                                  </div>
                                </div>
                              </div>


            



                            </div>
                            <div class="right-col">
                              <h1 itemprop="name"><?= htmlentities($produit->titre)?></h1>
                              <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                <meta itemprop="priceCurrency" content="USD">
                                <link itemprop="availability" href="http://schema.org/InStock">
                                <div class="price-shipping">
                                  <div class="price" id="price-preview" quickbeam="price" quickbeam-price="800">
                                  <?= htmlentities($produit->final_prix)?>
                                  </div>
                                  <p style="color:#086fcf">€/TTC</p>
                                </div>
                                <!-- <form method="post" enctype="multipart/form-data" id="AddToCartForm"> -->
                                <form id="AddToCartForm">
                                  <select name="id" id="productSelect" quickbeam="product" class="product-single__variants">
                                    <option  selected="selected"  data-sku="" value="7924994501">
                                      M / Blue - $800.00 USD
                                    </option>
                                    <option  data-sku="" value="7924995077">
                                      M / Red - $850.00 USD
                                    </option>
                                    <option  data-sku="" value="7924994437">
                                      L / Blue - $850.00 USD
                                    </option>
                                    <option  data-sku="" value="7924994693">
                                      L / Yellow - $850.00 USD
                                    </option>
                                    <option  data-sku="" value="7924995013">
                                      L / Red - $850.00 USD
                                    </option>
                                    <option  data-sku="" value="7924994373">
                                      XL / Blue - $900.00 USD
                                    </option>
                                    <option  data-sku="" value="7924994629">
                                      XL / Yellow - $850.00 USD
                                    </option>
                                    <option  data-sku="" value="7924830021">
                                      XXL / Blue - $950.00 USD
                                    </option>
                                    <option  data-sku="" value="7924994885"> 
                                      XXL / Red - $850.00 USD
                                    </option>
                                  </select>
                                  <div style="margin: 43px 12px;font-size: 20px;">
                                     <?php  if($produit->stock < 13){ ?>
                                      <p style="color: darkred;">Attention, il ne reste plus que :  <?= htmlentities($produit->stock)?> produits ! </p>
                                     <?php  }else{ ?>
                                      <p>En stock :  <?= htmlentities($produit->stock)?>. </p>
                                     <?php } ?>
                                    </div>
                                  <div class="btn-and-quantity-wrap">
                                    <div class="btn-and-quantity">
                                      <div id="AddToCart" quickbeam="add-to-cart">
                                        <span id="AddToCartText"><a href="panier.php?action=ajout&amp;l=<?php echo $produit->titre;?>&amp;q=1&amp;p=<?php echo $produit->final_prix;?>&amp;f=<?php echo $produit->id;?>" style="color:white; text-decoration:none;">Ajouter au panier</a></span>
                                      </div>
                                    </div>
                                  </div>
                                </form>
                                <div class="tabs">
                                  <div class="tab-labels">
                                    <span data-id="1" class="active">Informations</span>
                                  </div>
                                  <div class="tab-slides">
                                    <div id="tab-slide-1" itemprop="description"  class="slide active">
                                    <?= nl2br(htmlentities($produit->contenu))?> 
                                    <br><br>
                                    <?= nl2br(htmlentities($produit->contenu2))?>
                                    </div>

                                    <div id="tab-slide-2" class="slide">
                                      Tony Hunfinger
                                    </div>
                                  </div>
                                </div>
                                <div class="social-sharing-btn-wrapper">
                                  <span id="social_sharing_btn">Share</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php } ?>
                    </div>
                <!-- FIN DE L'ARTICLE PRINCIPALE -->  

                    <aside class="related">
                      <div class="_cont">
                        <h2>Vous pourriez aussi aimer</h2>
                        <div class="collection-list cols-4" id="collection-list" data-products-per-page="4">
                        <?php foreach($ligne1 as $produit){?>  
                          <a class="product-box" href="shopping.php?id=<?= htmlentities($produit->getId())?>">
                              <span class="img">
                                <span style="background-image: url('photoproduit1/<?= htmlentities($produit->getId())?>.jpg')" class="i first"></span>
                                <span class="i second" style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/product_030f9fc5-f253-4dca-a43a-fe2b719d0704_grande.png?v=1447530130')"></span>
                              </span>
                              <span class="text">
                                <strong><?=htmlentities($produit->getTitre())?></strong>
                                <span>
                                <?=htmlentities($produit->getFinal_prix())?>€
                                </span>
                              </span>
                              <?php } ?>
                            </a>
                  <!-- ici se termine le foreach -->        
                        </div>
                        <div class="more-products" id="more-products-wrap">
                          <span id="more-products" data-rows_per_page="1"><a href="shop.php" style="text-decoration: none;">Plus de produits</a></span>
                        </div>
                      </div>
                    </aside>
                  </div>
                </section>
              </main>
              <?php include "templates/fragments/footer.php" ?>   
            </body>
        <script src="js/shop.js" type="text/javascript"></script>
        <script src="js/shopping.js" type="text/javascript"></script>  
        <script src="js/header.js" type="text/javascript"></script>
        <script src="js/all.js" type="text/javascript"></script>
    </html>
