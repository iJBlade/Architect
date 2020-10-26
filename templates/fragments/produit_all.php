<div id="categorieAll" style="display: none;">  
<?php 
    // Afficher tous les produits
        foreach($ligne as $produit){?>
                        <div>
                            <h2><?=htmlentities($produit->getTitre())?></h2>    
                            <p><?=htmlentities($produit->getContenu())?></p>
                            <p><?=htmlentities($produit->getContenu2())?></p>
                            <p><?=htmlentities($produit->getPrix())?> €</p>
                            <p><?=htmlentities($produit->getTva())?> %</p>
                            <a href="shop_produit.php?id=<?= $produit->getId()?>">Afficher produit</a>
                            <?php if($produit->getStock() !== 0){ echo "<a href='panier.php'>Ajouter au panier</a>";}else{ echo"<p>Produit victime de son succès </p>";} ?>

                        </div>

            <?php } ?>  
</div>            