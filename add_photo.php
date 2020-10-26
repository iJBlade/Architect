<?php 
/* ******** * Contrôleur pour traiter l'ajout d'un article * **************** */
/*            Param : - Ajout d'une photo dans dossier et non base de donnée  
                      - Si connecter, on ajoute, sinon page error ( pour eviter
                      tentative d'intrusion)  
              Côté. : - Admin
/* ***************** * Librairie classe et connexion * ********************** */

include'lib/init.php';
session_start();  
/******************* Programme pour ajouter l'article *********************** */
    if(estConnecte()){

        if(isset($_POST['Ajouter'])){
            
            $titre = $_POST["titre"];
            $photo = $_FILES["photo"]["name"];
            $photo_tmp = $_FILES["photo"]["tmp_name"];

            if(!empty($photo_tmp)){
                $image= explode('.',$photo);
                $image_ext = end($image);
                if(in_array(strtolower($image_ext),array('png','jpg','jpeg'))===false){
                    echo 'Veuillez rentrer une image ayant pour extension : png, jpg ou jpeg';
                }else{
                    $taille = getimagesize($_FILES['photo']['tmp_name']);
                    $largeur = $taille[0];
                    $hauteur = $taille[1];
                    $largeur_miniature = 1000;
                    $hauteur_miniature = $hauteur / $largeur * 1000;
                    $im = imagecreatefromjpeg($_FILES['photo']['tmp_name']);
                    $im_miniature = imagecreatetruecolor($largeur_miniature
                    , $hauteur_miniature);
                    imagecopyresampled($im_miniature, $im, 0, 0, 0, 0, $largeur_miniature, $hauteur_miniature, $largeur, $hauteur);
                    imagejpeg($im_miniature, 'miniatures/'.$titre. '.jpg');
                }
            }else{
                echo 'Veuillez rentrer une image';
            }
            
        }
    }else{
        include "templates/pages/error.php";
    }