<?php 

include"lib/init.php";
session_start();
unset($_SESSION['recup_mail']);
$user=new admin();
include'templates/pages/login.php';