<div>
                <?php  foreach ($lignes as $article){ ?>
                        <div>
                            <div>
                                <h2><?= htmlentities($article->getTitre())?></h2><!-- titre  php-->
                                <button id="b0">Modifier le titre</button><br>
                                <button id="b01" style="display: none;">X</button>
                            </div>                   
                            <?php include "templates/update/titre.php"?>                           
                        </div>
                        <div style="display: flex;">
                            <div>
                                <img src="photo1/<?= htmlentities($article->getId())?>.jpg" width="400px" height="400px"/>
                                <?php include "templates/fragments_photo/ajout_photo/insert_photo.php"?>    
                            </div>   
                            <div>
                                <img src="photo2/<?= htmlentities($article->getId())?>.jpg" width="400px" height="400px"/>
                                <?php include "templates/fragments_photo/ajout_photo/insert_photo2.php"?> 
                            </div>
                            <div>
                                <img src="photo3/<?= htmlentities($article->getId())?>.jpg" width="400px" height="400px"/>
                                <?php include "templates/fragments_photo/ajout_photo/insert_photo3.php"?>                         
                            </div>
                        </div> 
                        <div>
                            <div>
                                <p><?= htmlentities($article->getContenu())?></p><!-- titre  contenu-->   
                                <button id="b1">Modifier le contenu n°1</button>
                                <button id="b1-1" style="display: none;">X</button>
                            </div>                   
                            <?php include "templates/update/contenu1.php"?>                           
                        </div>    
                        <div>
                            <div>
                                <p><?= htmlentities($article->getContenu2())?></p><!-- titre  contenu-->   
                                <button id="b2">Modifier le contenu n°2</button>
                                <button id="b2-1" style="display: none;">X</button>
                            </div>                   
                            <?php include "templates/update/contenu2.php"?>                           
                        </div>                     
                        <div>
                            <div>
                                <p><?= htmlentities($article->getContenu3())?></p><!-- titre  contenu-->   
                                <button id="b3">Modifier le contenu n°3</button>
                                <button id="b3-1" style="display: none;">X</button>
                            </div>                   
                            <?php include "templates/update/contenu3.php"?>                           
                        </div>                       
                        <div>
                            <div>
                                <p><?= htmlentities($article->getContenu4())?></p><!-- titre  contenu-->   
                                <button id="b4">Modifier le contenu n°4</button>
                                <button id="b4-1" style="display: none;">X</button>
                            </div>                   
                            <?php include "templates/update/contenu4.php"?>                           
                        </div>       
                        <div>
                            <a href="delete.php?id=<?=$article->getId()?>">Supprimer cet article ? </a>   
                            <a href="online.php?id=<?=$article->getId()?>">Mettre cet article en ligne? </a>
                            <a href="dashboard_offline.php?id=<?=$article->getId()?>">Aperçu?</a>                  
                        </div>                                           
                <?php } ?>
            </div>