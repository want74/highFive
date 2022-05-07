<?php 
session_start();
include "connect.php";
$query1 = mysqli_query($con, "INSERT INTO news  (title, text, img, kit_id, id) VALUES ('{$_POST['title']}','{$_POST['text']}','{$_POST['img']}','{$_POST['kit_id']}', NULL)");
echo "INSERT INTO news  (title, text, img, kit_id, id) VALUES ('{$_POST['title']}','{$_POST['text']}','{$_POST['img']}','{$_POST['kit_id']}', NULL)";
header('location: allnews.php');
 ?>