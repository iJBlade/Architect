<!DOCTYPE html>
<?php // page complète où le détail d'un produit est affiché COTE CLIENT  ?>
<html>
    <?php include 'templates/fragments/head.php'?>
    <title>SHOP-Produits</title>
    <body>
        <?php include 'templates/fragments/header.php'?>
        <main>
            <div>
            <?php while( $produit=$select->fetch(PDO::FETCH_OBJ)){ ?> 
                    <div>
                    <div style="display: flex;">
                            <div>
                                <img src="photoproduit1/<?= htmlentities($produit->id)?>.jpg" width="400px" height="400px"/>  
                            </div>   
                            <div>
                                <img src="photoproduit2/<?= htmlentities($produit->id)?>.jpg" width="400px" height="400px"/>
                            </div>
                            <div>
                                <img src="photoproduit3/<?= htmlentities($produit->id)?>.jpg" width="400px" height="400px"/>                       
                            </div>
                        </div>     
                        <div>
                            <h2> Détail du produit : <?=htmlentities($produit->titre)?></h2>                              
                            <p><?=htmlentities($produit->contenu)?></p>
                            <p><?=htmlentities($produit->contenu2)?></p>
                            <p>Stock : <?= htmlentities($produit->stock)?></p>
                            <p>Prix HT : <?=htmlentities($produit->prix)?> €</p>
                            <p>Prix TTC :<?=htmlentities($produit->final_prix)?> €</p>
                            <p>Tva : <?=htmlentities($produit->tva)?> %</p>
                        </div>
                    </div>
                    
                    <?php if($produit->stock !== "0"){ ?> 
                        <div>
                        <select name="quantite" id="">
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>                        
                        </div>
                        <a href="panier.php?action=ajout&amp;l=<?php echo $produit->titre;?>&amp;q=1&amp;p=<?php echo $produit->final_prix;?>">Ajouter au panier</a>
                    <?php }else{ ?>                        
                        <p style='color:red;'>Produit victime de son succès ! </p>
                    <?php } ?>

            <?php } ?>                
            </div>
        </main>
        <?php include "templates/fragments/footer.php"?>                    
    </body>
</html>