
<?php // page du détail d'un article ou d'un produit HORS LIGNE du site de drop shipping 

                    if(isset($_GET["id"])){
                        include "templates/fragments/dashboard_offline_article.php";
                    }elseif(isset($_GET["prod"])){
                        include "templates/fragments/dashboard_offline_produit.php";
                    }else{
                        echo "";
                    }                              
                ?>
