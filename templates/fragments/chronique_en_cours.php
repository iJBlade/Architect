<?php 

/*      Fragment : Chronique en cours côté ADMIN                                                    */
/*
        Param : Récupérer les chroniques en cours de création selon leur statut, ici statut = 0;
        Retour : liste d'article en cours de création

*/ 

?>
<div id="chro_off" style="display: none;">
    <h1 style="padding: 22px 0px;background: darksalmon; color:white;margin: 2px 0px;">Articles hors ligne : </h1>
        <?php  foreach ($resultat as $chronique){ ?>                  
                        <figure class="snip1584">
                            <img src="admin/encours.png">
                            <figcaption>
                                <h3><?= htmlentities($chronique->getTitre())?></h3>
                            </figcaption><a href="dashboard_offline.php?chronique=<?=$chronique->getId()?>" id="aI"></a>
                        </figure>               
        <?php } ?>                
</div>    