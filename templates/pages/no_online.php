<!DOCTYPE html>
<?php // page complète où TOUS les articles sont affichés   ?>
<html>
    <?php include 'templates/fragments/head.php'?>
    <title>Article en cours de parution</title>
    <body>
        <?php include 'templates/fragments/header.php'?>
        <main>
            <h1>Article non publié et en cours de création : </h1>
            <div>
                <?php  foreach ($lignes as $article){ ?>
                    <div>    
                        <div>
                            <h2><?=htmlentities($article->getTitre())?></h2>    
                            <p><?=htmlentities($article->getContenu())?></p>
                        </div>
<!-- ici normalement il y a la photo de l'article comme dans notyourbabe <img style="width:700px;height:700px;"src=" htmlentities($article->getPhoto())"> -->
                        <div>
                            <a href="dashboard_article.php?id=<?=$article->getId()?>">Afficher l'article</a>
                            <a href="delete.php?id=<?=$article->getId()?>" id="delete">Supprimer l'article</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </main>
        <?php include "templates/fragments/footer.php"?>                    
    </body>
</html>