<?php 

/*                                              Fragment : Détail article EN LIGNE côté ADMIN                                                    */
/*
        Param : Récupérer le détail d'un article EN LIGNE selon leur id et leur statut;
        Retour : détail article -> $id; $categorie;

*/ 

?>            
                <?php foreach($lignes as $article){ ?>
                    <h1>Aperçu de l'article en ligne. </h1>
                    <p>Note : Cette page est l'aperçu de ce que la(e) visitrice(eur) voit lorsqu'il/elle consulte cet article. Toutes modifications sur un article en ligne sera immédiatement vu par la(e) visitrice(eur).</p>
                    <h4>Titre : <?= htmlentities($article->getTitre())?></h4><!-- titre  php-->
                    <div style="display: flex;">
                                <div>
                                    <img src="photo1/<?= htmlentities($article->getId())?>.jpg" width="400px" height="400px"/>  
                                </div>   
                                <div>
                                    <img src="photo2/<?= htmlentities($article->getId())?>.jpg" width="400px" height="400px"/>
                                </div>
                                <div>
                                    <img src="photo3/<?= htmlentities($article->getId())?>.jpg" width="400px" height="400px"/>                       
                                </div>
                    </div>
                    <div>
                                <p>Paragraphe n°1 :<?= htmlentities($article->getContenu())?><!-- titre  contenu-->   
                                <p>Paragraphe n°2 :<?= htmlentities($article->getContenu2())?><!-- titre  contenu-->   
                                <p>Paragraphe n°3 :<?= htmlentities($article->getContenu3())?><!-- titre  contenu-->   
                                <p>Paragraphe n°4 :<?= htmlentities($article->getContenu4())?><br><!-- titre  contenu--> 

                    </div> 
                    <div>
                                <a href="delete.php?id=<?=$article->getId()?>">Supprimer cet article ? </a> 
                                <a href="offline.php?id=<?=$article->getId()?>"> Mettre cet article hors ligne ? </a>
                                <a href="update.php?id=<?=$article->getId()?>">Modifier cet article ?</a>                
                    </div> 



                <?php } ?>