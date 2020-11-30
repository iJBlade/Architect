<?php // produit qui ne sont pas en ligne ?>
<div id="prod_off" style="display: none;">

<h1 style="padding: 22px 0px;margin: 2px 0px;">Produits hors ligne : </h1>
    <?php  foreach ($tab as $produit){ ?>                 
                        <figure class="snip1584">
                            <img src="admin/encours.png">
                            <figcaption>
                                <h3><?= htmlentities($produit->getTitre())?></h3>
                            </figcaption><a href="dashboard_offline.php?prod=<?=$produit->getId()?>" id="aI"></a>
                        </figure> 
    <?php } ?>                
</div> 
