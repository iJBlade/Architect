
<?php // page qui affiche l'article ou le produit a modifier ?>

           
                <?php 
                    if(isset($_GET["id"])){
                        include "templates/fragments/update_article.php";
                    }elseif(isset($_GET["prod"])){
                        include "templates/fragments/update_produit.php";
                    }if(isset($_GET["chronique"])){
                        include "templates/fragments/update_chronique.php";
                    }else{
                        echo "";
                    }                              
                ?>
