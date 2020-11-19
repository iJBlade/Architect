<?php 

/*      Fragment : Article en ligne côté ADMIN                                                    */
/*
        Param : Récupérer les articles en ligne selon leur statut, ici statut = 1;
        Retour : liste d'article publié

*/  

?> 
<div id="art_on" style="display: none;">
    <h1 style="padding: 22px 0px;background: darkslategrey; color:white;margin: 2px 0px;">Portfolio en ligne : </h1>
    <?php  foreach ($lignes as $article){ ?>        
                        <figure class="snip1584">
                            <img src="photo1/<?= htmlentities($article->getId())?>.jpg" alt="sample87" />
                            <figcaption>
                                <h3><?= htmlentities($article->getTitre())?></h3>
                            </figcaption>
                            <a href="dashboard_online.php?id=<?=$article->getId()?>" id="aI"></a>
                        </figure>
    <?php } ?>
</div>
 