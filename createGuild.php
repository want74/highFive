<?php 
session_start();
include "connect.php";
$query1 = mysqli_query($con, "INSERT INTO guilds  (name, description, discord, img, rating, kit_id, level, gm_id, id) VALUES ('{$_POST['name']}', '{$_POST['description']}', '{$_POST['discord']}','{$_POST['img']}', 0, '{$_POST['kit_id']}',0,'{$_SESSION['user_id']}', NULL)");

header('location: kit.php?kit_id='.$_POST['kit_id']);
 ?>