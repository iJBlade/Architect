
                <?php 
                    if(isset($_GET["id"])){
                        include "templates/fragments/dashboard_online_article.php";
                    }elseif(isset($_GET["prod"])){
                        include "templates/fragments/dashboard_online_produit.php";
                    }else{
                        echo "";
                    }                              
                ?>
