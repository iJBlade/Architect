<div>
                <?php  foreach ($ligne as $produit){ ?>
                        <div> 
                            <div>
                                <h2><?= htmlentities($produit->getTitre())?></h2><!-- titre  php-->
                                <button id="b0">Modifier le titre</button><br>
                                <button id="b01" style="display: none;">X</button>
                            </div>                   
                            <?php include "templates/update/titre.php"?>                           
                        </div>
                        <div style="display: flex;">
                            <div class="wrapper">
                                    <div class="picture">
                                        <img id='profil' src="photoproduit1/<?= htmlentities($produit->getId())?>.jpg" width="500px" height="500px">      
                                        <?php include "templates/fragments_photo/ajout_photo/insert_photo_produit.php"?> 
                                            
                                    </div>
                            </div>
                            <div class="wrapper">
                                <div class="picture">
                                    <img id='profil' src="photoproduit2/<?= htmlentities($produit->getId())?>.jpg" width="500px" height="500px">      
                                    <?php include "templates/fragments_photo/ajout_photo/insert_photo2_produit.php"?>    
                                        
                                </div>
                            </div>
                            <div class="wrapper">
                                <div class="picture">
                                    <img id='profil' src="photoproduit3/<?= htmlentities($produit->getId())?>.jpg" width="500px" height="500px">      
                                    <?php include "templates/fragments_photo/ajout_photo/insert_photo3_produit.php"?>     
                                        
                                </div>
                            </div>
                        </div> 
                        <div style="position: absolute;top: 70%;">
                            <div style="font-size: 20px;text-align: initial;">
                                <div>
                                    <p><?= htmlentities($produit->getContenu())?></p><!-- titre  Description-->   
                                    <button id="b1">Modifier la Description n°1</button>
                                    <button id="b1-1" style="display: none;">X</button>
                                </div>                   
                                <?php include "templates/update/contenu1.php"?>                           
                            </div>    
                            <div style="font-size: 20px;text-align: initial;">
                                <div>
                                    <p><?= htmlentities($produit->getContenu2())?></p><!-- titre  Description-->   
                                    <button id="b2">Modifier la Description n°2</button>
                                    <button id="b2-1" style="display: none;">X</button>
                                </div>                   
                                <?php include "templates/update/contenu2.php"?>                           
                            </div>                     
                <!-- ici normalement il y a la photo de l'produit comme dans notyourbabe <img style="width:700px;height:700px;"src=" htmlentities($produit->getPhoto())"> -->
                            <div style="font-size: 20px;text-align: initial;">
                                <div>
                                    <p><?= htmlentities($produit->getPrix())?>€</p><!-- titre  contenu-->   
                                    <button id="b3">Modifier le prix</button>
                                    <button id="b3-1" style="display: none;">X</button>
                                </div>                   
                                <?php include "templates/update/prix.php"?>                           
                            </div>                       
                            <div style="font-size: 20px;text-align: initial;">
                                <div>
                                    <p><?= htmlentities($produit->getTva())?>%</p><!-- titre  contenu-->   
                                    <button id="b4">Modifier la Tva</button>
                                    <button id="b4-1" style="display: none;">X</button>
                                </div>                   
                                <?php include "templates/update/tva.php"?>                           
                            </div>       
                            <div>
                                <a href="delete.php?prod=<?=$produit->getId()?>">Supprimer ce produit ? </a>
                                <a href="dashboard_offline.php?prod=<?=$produit->getId()?>">Aperçu?</a>         
                            </div>                     
                        </div> 
                                              
                <?php } ?>
</div>