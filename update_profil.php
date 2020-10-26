<?php
include "lib/init.php";
session_start();
$id= $_SESSION["id"];
$user = new admin($id);
$user->loadFromTab($_POST);
$user->updateInfo();
header("Location: presentation.php");