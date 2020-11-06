<link href="css/shop.css" rel='stylesheet' type='text/css'>

<link href="css/header.css" rel='stylesheet' type='text/css'>
<link href="css/footer_blog.css" rel='stylesheet' type='text/css'>
<?php include "templates/fragments/header_shop.php"?>
<main style="padding-top:92px">


<div id="wrapper">
<?php // C'est le logo panier frabriqué manuellement   ?>    
<div class="cart-icon-top"></div>
<div class="cart-icon-bottom"></div>
<?php /* ********************************************************************* */ ?>


<?php // C'est le lien panier qui apparait lorsqu'on ajoute un article au panier  ?>
<div id="checkout">
	<a href="panier.php" style="text-decoration:none;color:gray">PANIER</a>
</div>
<?php // fin  ?>

<?php // C'est le panier ?>
<div id="sidebar">
    <!-- JE TRAVAILLE ICI POUR LE PANIER -->
    <h3>CART</h3>   
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
                        <strong><?= htmlspecialchars($_SESSION['panier']['prixProduit'][$i]) ?> €</strong>
                        <div class='cart-item-border'></div>
                        <div class='delete-item'></div>
                    </div>
                 <?php } 
                }
} ?>

<?php // C'est le lien panier qui apparait lorsqu'on ajoute un article au panier  ?>
<h3>CATEGORIES</h3>
    <div class="checklist categories">
    	<ul>
        	<li><a href=""><span></span>Categorie 1</a></li>
            <li><a href=""><span></span>Categorie 1</a></li>
            <li><a href=""><span></span>Categorie 1</a></li>
            <li><a href=""><span></span>Categorie 1</a></li>
            <li><a href=""><span></span>Categorie 1</a></li>
            <li><a href=""><span></span>Categorie 1</a></li>
            <li><a href=""><span></span>Categorie 1</a></li>
            <li><a href=""><span></span>Categorie 1</a></li>
            <li><a href=""><span></span>Categorie 1</a></li>
            <li><a href=""><span></span>Categorie 1</a></li>
        </ul> 
    </div>
    
    <h3>COLORS</h3>
    <div class="checklist colors">
    	<ul>
        	<li><a href=""><span></span>Beige</a></li>
            <li><a href=""><span style="background:#222"></span>Black</a></li>
            <li><a href=""><span style="background:#6e8cd5"></span>Blue</a></li>
            <li><a href=""><span style="background:#f56060"></span>Brown</a></li>
            <li><a href=""><span style="background:#44c28d"></span>Green</a></li>
        </ul>
        
        <ul>
        	<li><a href=""><span style="background:#999"></span>Grey</a></li>
            <li><a href=""><span style="background:#f79858"></span>Orange</a></li>
            <li><a href=""><span style="background:#b27ef8"></span>Purple</a></li>
            <li><a href=""><span style="background:#f56060"></span>Red</a></li>
            <li><a href=""><span style="background:#fff;border: 1px solid #e8e9eb;width:13px;height:13px;"></span>White</a></li>
        </ul>        
    </div>
    
    <h3>SIZES</h3>
    <div class="checklist sizes">
    	<ul>
        	<li><a href=""><span></span>XS</a></li>
            <li><a href=""><span></span>S</a></li>
            <li><a href=""><span></span>M</a></li>
        </ul>
        
        <ul>
        	<li><a href=""><span></span>L</a></li>
            <li><a href=""><span></span>XL</a></li>
            <li><a href=""><span></span>XXL</a></li>
        </ul>        
    </div>    

</div>

<div id="grid-selector">
       <div id="grid-menu">
       	   Vue:
           <ul>           	   
               <li class="largeGrid"><a href=""></a></li>
               <li class="smallGrid"><a class="active" href=""></a></li>
           </ul>
       </div>
       
       Résultats
</div>
<!-- début article foreach-->

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
             
            <h3>COLORS</h3>
            <div class="colors-large">
                <ul>
                    <li><a href="" style="background:#222"><span></span></a></li>
                    <li><a href="" style="background:#6e8cd5"><span></span></a></li>
                    <li><a href="" style="background:#f56060"><span></span></a></li>
                    <li><a href="" style="background:#44c28d"><span></span></a></li>
                </ul> 
            </div>

            <h3>SIZE</h3>
            <div class="sizes-large">
 				<span>XS</span>
                <span>S</span>
                <span>M</span>
                <span>L</span>
                <span>XL</span>
                <span>XXL</span>
            </div>                      
            <a href="shopping.php?id=<?php echo $produit->id;?>" class="more" style="/*! margin-top: 69px; *//*! width: 100%; */position: absolute;bottom: 12%;left: 37%;">En savoir plus</a>           
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
                        <p>Catégorie</p>                                            
                        
                        <div class="product-options">
                        <strong>SIZES</strong>
                        <span>XS, S, M, L, XL, XXL</span>
                        <strong>COLORS</strong>
                        <div class="colors">
                            <div class="c-blue"><span></span></div>
                            <div class="c-red"><span></span></div>
                            <div class="c-white"><span></span></div>
                            <div class="c-green"><span></span></div>                           
                        </div><br>
                    </div>                       
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
<!-- fin d'un seul article avec possibilité de double vision en 3x3x3 et 2x2-->    
   
   
</div>
</div>
</main>
<?php include "templates/fragments/footer.php" ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/shop.js" type="text/javascript"></script>
<script src="js/shopping.js" type="text/javascript"></script>  
<script src="js/header.js" type="text/javascript"></script>
<script src="js/all.js" type="text/javascript"></script>