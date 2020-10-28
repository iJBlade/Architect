<?php // while($visit=$req->fetch(PDO::FETCH_ASSOC)){ ?>
<div>
    <p>Marie, votre site a été visité : 2 fois</p>
</div>

<?php //} ?>
<?php 
/****
 * 
 * nombre de visiteur car c'est pas ça la haut 
 * 
 * 
 * 
 * $visiteur = prepare(SELECT * FROM table_visite WHERE=:visite_online);
$visiteur->bindvalue(':visite_online', $id_online, PDO::PARAM_STR);
$visiteur->execute();
$list_visiteur = $visiteur->fetchAll(PDO::FETCH_ASSOC);
 
foreach($list_visiteur as $all => $each)
{
  echo $each['ip'];."<br/>";
  echo $each['pages_vues'];."<br/>";
 
}
 * 
 * 
 * 
 * 
 */


?>