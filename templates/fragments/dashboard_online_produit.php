<?php 

/*      Fragment : Détail produit en ligne côté ADMIN                                                    */
/*
        Param : Récupérer le détail d'un produit EN LIGNE selon leur id et leur statut;
        Retour : détail produit -> $id; $categorie;

*/ 

?>        


<link href="css/fragment.css" rel='stylesheet' type='text/css'>
<link href="css/header.css" rel='stylesheet' type='text/css'>
<link href="css/footer_blog.css" rel='stylesheet' type='text/css'>
<?php include "templates/fragments/header.php"?>
<main style="padding-top: 85px;    margin-bottom: 145px;"> 

<div style="max-width: 730px;margin: 0 auto;" >
        <a href="delete.php?prod=<?=$produit->getId()?>" id="aA" >Supprimer ce produit ? </a> 
        <a href="offline.php?prod=<?=$produit->getId()?>" id="aA"> Mettre ce produit hors ligne ? </a>
        <a href="update.php?prod=<?=$produit->getId()?>" id="aA">Modifier ce produit ?</a>                
</div>  
<div style="text-align: center;font-weight: 700;color: darkgray;font-size: 14px;text-decoration: none;text-transform: uppercase;letter-spacing: 1px;background-color: whitesmoke;">

<h1>Aperçu du produit en ligne</h1>
<p>Note : Cette page est l'aperçu de ce que la(e) visitrice(eur) voit lorsqu'il/elle consulte cet article. Toutes modifications sur un article en ligne sera immédiatement vu par la(e) visitrice(eur).</p>
</div>

<section aria-label="Main content" role="main" class="product-detail">
  <div itemscope itemtype="http://schema.org/Product">
    <meta itemprop="url" content="">
    <meta itemprop="image" content="">
    <div class="shadow">
    <?php  foreach ($result as $produit){ ?>
      <div class="_cont detail-top">
        <div class="cols">
          <div class="left-col">
            <div class="thumbs">
              <a class="thumb-image active" href="photoproduit1/<?= htmlentities($produit->getId())?>.jpg" data-index="0">
                <span><img src="photoproduit1/<?= htmlentities($produit->getId())?>.jpg" alt="photoproduit1/<?= htmlentities($produit->getTitre())?>"></span>
              </a>
              <a class="thumb-image" href="photoproduit2/<?= htmlentities($produit->getId())?>.jpg" data-index="1">
                <span><img src="photoproduit2/<?= htmlentities($produit->getId())?>.jpg" alt="photoproduit2/<?= htmlentities($produit->getTitre())?>"></span>
              </a>
              <a class="thumb-image" href="photoproduit3/<?= htmlentities($produit->getId())?>.jpg" data-index="1">
                <span><img src="photoproduit3/<?= htmlentities($produit->getId())?>.jpg" alt="photoproduit3/<?= htmlentities($produit->getTitre())?>"></span>
              </a>
              
            </div>
            <div class="big">
              <img  src="photoproduit1/<?= htmlentities($produit->getId())?>.jpg" ></img>
              <div id="banner-gallery" class="swipe">
                <div class="swipe-wrap">
                  <div style="background-image: photoproduit1/<?= htmlentities($produit->getId())?>.jpg"></div>
                  <div style="background-image: photoproduit2/<?= htmlentities($produit->getId())?>.jpg"></div>
                  <div style="background-image: photoproduit3/<?= htmlentities($produit->getId())?>.jpg"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="right-col">
            <h1 itemprop="name"><?= htmlentities($produit->getTitre())?></h1>
            <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
              <meta itemprop="priceCurrency" content="USD">
              <link itemprop="availability" href="http://schema.org/InStock">
              <div class="price-shipping">
                <div class="price" id="price-preview" quickbeam="price" quickbeam-price="800">
                <?= htmlentities($produit->getFinal_prix())?>
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
                <div class="btn-and-quantity-wrap">
                  <div class="btn-and-quantity">
                    <div id="AddToCart" quickbeam="add-to-cart">
                      <span id="AddToCartText"><a href="#" style="color:white; text-decoration:none;">Ajouter au panier</a></span>
                    </div>
                  </div>
                </div>
              </form>
              <div class="tabs">
                <div class="tab-labels">
                  <span data-id="1" class="active">Info</span>
                </div>
                <div class="tab-slides">
                  <div id="tab-slide-1" itemprop="description"  class="slide active">
                  <?= htmlentities($produit->getContenu())?> 
                  <br><br>
                  <?= htmlentities($produit->getContenu2())?>
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
  </div>
</section>
</main>
<!-- Quickbeam cart-->
<?php include "templates/fragments/footer.php" ?>
<div id="quick-cart" quickbeam="cart">
  <a id="quick-cart-pay" quickbeam="cart-pay" class="cart-ico">
    <span>
      <strong class="quick-cart-text">Pay<br></strong>
      <span id="quick-cart-price">0</span>
      <span id="quick-cart-pay-total-count">0</span>
    </span>
  </a>
</div>

<!-- Quickbeam cart end -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/shopping.js" type="text/javascript"></script>  
<script src="js/header.js" type="text/javascript"></script>
<script src="js/all.js" type="text/javascript"></script>