<?php
include'lib/init.php';
session_start();

if(estConnecte()){
    $id=$_SESSION["id"];
    $user = new admin($id);  
    include'templates/pages/home.php';
}else{
    include'templates/pages/home.php';
}
