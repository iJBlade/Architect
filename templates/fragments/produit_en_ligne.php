<?php // produit qui sont en ligne ?>
<div id="prod_on" style="display: none;">
<h1 style="padding: 22px 0px;margin: 2px 0px;">Produits en ligne : </h1>
<?php  foreach ($result as $produit){ ?>
                             
                        <figure class="snip1584">
                            <img src="photoproduit1/<?= htmlentities($produit->getId())?>.jpg">
                            <figcaption>
                                <h3><?= htmlentities($produit->getTitre())?></h3>
                            </figcaption><a href="dashboard_online.php?prod=<?=$produit->getId()?>" id="aI"></a>
                        </figure>
                 
    <?php } ?>                 
</div> 
