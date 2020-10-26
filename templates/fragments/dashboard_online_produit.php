<?php 

/*      Fragment : Détail produit en ligne côté ADMIN                                                    */
/*
        Param : Récupérer le détail d'un produit EN LIGNE selon leur id et leur statut;
        Retour : détail produit -> $id; $categorie;

*/ 

?>        

<link rel="stylesheet" href="scss\test.scss" type="text/css">
<link href="css/fragment.css" rel='stylesheet' type='text/css'>

<div id="header">	
	<ul>
        <li><a href="home.php">HOME</a></li>
        <li><a href="spacemember.php">Espace personnel</a></li>
        <li><a href="dashboard.php">Tableau de bord</a></li> 
        <li><a href="presentation.php">Ma présentation</a></li>  
        <li><a href="contact.php">Contact</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="deconnexion.php">Déconnexion</a></li>                                 
    </ul>		
</div>
<div style="text-align: center;font-weight: 700;color: red;font-size: 14px;text-decoration: none;text-transform: uppercase;letter-spacing: 1px;">
        <a href="delete.php?prod=<?=$produit->getId()?>" style="color:darkred;">Supprimer ce produit ? </a> 
        <a href="offline.php?prod=<?=$produit->getId()?>" style="color :darkgreen"> Mettre ce produit hors ligne ? </a>
        <a href="update.php?prod=<?=$produit->getId()?>" style="color:darkblue">Modifier ce produit ?</a>                
</div>  
<div style="text-align: center;font-weight: 700;color: red;font-size: 14px;text-decoration: none;text-transform: uppercase;letter-spacing: 1px;">

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
              <div class="detail-socials">
                <div class="social-sharing" data-permalink="">
                  <a target="_blank"  class="share-facebook" title="Share"></a>
                  <a target="_blank"  class="share-twitter" title="Tweet"></a>
                  <a target="_blank"  class="share-pinterest" title="Pin it"></a>
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
              <div class="swatches">
                <div class="swatch clearfix" data-option-index="0">
                  <div class="header">Size</div>
                  <div data-value="M" class="swatch-element plain m available">
                    <input id="swatch-0-m" type="radio" name="option-0" value="M" checked  />
                    <label for="swatch-0-m">
                      M
                      <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                    </label>
                  </div>
                  <div data-value="L" class="swatch-element plain l available">
                    <input id="swatch-0-l" type="radio" name="option-0" value="L"  />
                    <label for="swatch-0-l">
                      L
                      <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                    </label>
                  </div>
                  <div data-value="XL" class="swatch-element plain xl available">
                    <input id="swatch-0-xl" type="radio" name="option-0" value="XL"  />
                    <label for="swatch-0-xl">
                      XL
                      <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                    </label>
                  </div>
                  <div data-value="XXL" class="swatch-element plain xxl available">
                    <input id="swatch-0-xxl" type="radio" name="option-0" value="XXL"  />
                    <label for="swatch-0-xxl">
                      XXL
                      <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                    </label>
                  </div>
                </div>
                <div class="swatch clearfix" data-option-index="1">
                  <div class="header">Color</div>
                  <div data-value="Blue" class="swatch-element color blue available">
                    <div class="tooltip">Blue</div>
                    <input quickbeam="color" id="swatch-1-blue" type="radio" name="option-1" value="Blue" checked  />
                    <label for="swatch-1-blue" style="border-color: blue;">
                      <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                      <span style="background-color: blue;"></span>
                    </label>
                  </div>
                  <div data-value="Red" class="swatch-element color red available">
                    <div class="tooltip">Red</div>
                    <input quickbeam="color" id="swatch-1-red" type="radio" name="option-1" value="Red"  />
                    <label for="swatch-1-red" style="border-color: red;">
                      <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                      <span style="background-color: red;"></span>
                    </label>
                  </div>
                  <div data-value="Yellow" class="swatch-element color yellow available">
                    <div class="tooltip">Yellow</div>
                    <input quickbeam="color" id="swatch-1-yellow" type="radio" name="option-1" value="Yellow"  />
                    <label for="swatch-1-yellow" style="border-color: yellow;">
                      <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                      <span style="background-color: yellow;"></span>
                    </label>
                  </div>
                </div>
                <div class="guide">
                  <a>Size guide</a>
                </div>
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
                    <div class="spinner">
                      <span class="btn minus" data-id="2721888517"></span>
                      <input type="text" id="updates_2721888517" name="quantity" value="1" class="quantity-selector">
                      <input type="hidden" id="product_id" name="product_id" value="2721888517">
                      <span class="q">Qty.</span>
                      <span class="btn plus" data-id="2721888517"></span>
                    </div>
                    <div id="AddToCart" quickbeam="add-to-cart">
                      <span id="AddToCartText"><a href="#" style="color:white; text-decoration:none;">Ajouter au panier</a></span>
                    </div>
                  </div>
                </div>
              </form>
              <div class="tabs">
                <div class="tab-labels">
                  <span data-id="1" class="active">Info</span>
                  <span data-id="2">Brand</span>
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
<footer role="contentinfo" aria-label="Footer">
  <div class="_cont">
    <div class="socials">
      <strong>follow me:</strong>
      <ul>
        <li><a  title="html-koder / test on Twitter" class="tw" target="_blank">Twitter</a></li>
        <li><a  title="html-koder / test on Facebook" class="fb" target="_blank">Facebook</a></li>
        <li><a  title="html-koder / test on Instagram" class="in" target="_blank">Instagram</a></li>
        <li><a  title="html-koder / test on Pinterest" class="pi" target="_blank">Pinterest</a></li>
      </ul>
    </div>
    <div class="top">
      <div class="right">
        <form method="post" action="/contact" class="contact-form" accept-charset="UTF-8">
          <input type="hidden" value="customer" name="form_type" /><input type="hidden" name="utf8" value="✓" />
          <div>
            <input type="hidden" id="contact_tags" name="contact[tags]" value="newsletter"/>
            <input type="text" id="contact_email" name="contact[email]" placeholder="Submit e-mail for special offers...">
            <button type="submit" title="Newsletter Signup">OK</button>
          </div>
        </form>
      </div>
      <div class="left">
        <span class="phone">+420 123 456 789</span>
        <a class="mail" href="mailto:email.from@settings.com">email.from@settings.com</a>
      </div>
    </div>
    <div class="bottom">
      <div class="left">
        <nav role="navigation" aria-label="Service menu">
          <ul>
            <li><a >Lorem ipsum</a></li>
            <li><a >About Us</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</footer>

<!-- Quickbeam cart-->

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