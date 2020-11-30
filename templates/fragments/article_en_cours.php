<?php 

/*      Fragment : Article en cours côté ADMIN                                                    */
/*
        Param : Récupérer les articles en cours de création selon leur statut, ici statut = 0;
        Retour : liste d'article en cours de création

*/ 

?>
<div id="art_off" style="display: none;">
    <h1 style="padding: 22px 0px;margin: 2px 0px;">Portfolio hors ligne : </h1>
        <?php  foreach ($ligne as $article){ ?>                  
                        <figure class="snip1584">
                            <img src="admin/encours.png">
                            <figcaption>
                                <h3><?= htmlentities($article->getTitre())?></h3>
                            </figcaption><a href="dashboard_offline.php?id=<?=$article->getId()?>" id="aI"></a>
                        </figure>               
        <?php } ?>                
</div>   