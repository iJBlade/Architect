<?php 

/*      Fragment : chronique en ligne côté ADMIN                                                    */
/*
        Param : Récupérer les chroniques en ligne selon leur statut, ici statut = 1;
        Retour : liste d'chronique publié

*/  

?> 
<div id="chro_on" style="display: none;">
    <h1 style="padding: 22px 0px;background: darksalmon; color:white;margin: 2px 0px;">Articles en ligne : </h1>
    <?php  foreach ($resultat_online as $chronique){ ?>        
                        <figure class="snip1584">
                            <img src="photochronique1/<?= htmlentities($chronique->getId())?>.jpg" alt="sample87" />
                            <figcaption>
                                <h3><?= htmlentities($chronique->getTitre())?></h3>
                            </figcaption>
                            <a href="dashboard_online.php?chronique=<?=$chronique->getId()?>" id="aI"></a>
                        </figure>
    <?php } ?>
</div>
 