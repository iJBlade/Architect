<div id="categorie2" style="display: none;">   
<?php 
    // Afficher les produits de la categorie 2
        foreach($ligne2 as $produit){?> 
                        <div>
                            <h2><?=htmlentities($produit->getTitre())?></h2>    
                            <p><?=htmlentities($produit->getContenu())?></p>
                            <p><?=htmlentities($produit->getContenu2())?></p>
                            <p><?=htmlentities($produit->getPrix())?> €</p>
                            <p><?=htmlentities($produit->getTva())?> %</p>
                            <a href="shop_produit.php?id=<?= $produit->getId()?>">Afficher produit</a>
                        </div>
                    
            <?php } ?>  
</div>            