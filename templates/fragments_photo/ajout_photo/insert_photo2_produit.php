<?php 
    // Fragments pour AJOUTER des photos

?>
<form name="" method="POST" action="" enctype="multipart/form-data">
    <input type="file" name="photo"><br>
    <input type="hidden" name="id" value="<?php if(isset($_GET["id"])){echo $article->getId();}else{ echo $produit->getId();}?>" > 
    <input type="submit" name="Valider" value="Ajouter">
</form>
  
<?php
    if(estConnecte()){ 

        if(isset($_POST['Valider'])){
            
            $id = $_POST["id"];
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
                    imagejpeg($im_miniature, 'photoproduit2/'.$id. '.jpg');
                }
            }else{
                echo 'Veuillez rentrer une image';
            }
            
        }
    }else{
        include "templates/pages/error.php";
    }