<?php 
session_start();
include "connect.php";
$query1 = mysqli_query($con, "INSERT INTO treb  (text, guild_id, id) VALUES ('{$_POST['text']}','{$_POST['guild_id']}', NULL)");

header('location: treb.php?guild_id='.$_POST['guild_id']);
 ?>