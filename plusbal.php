<?php 
session_start();
include "connect.php";
$str = mysqli_query($con, "SELECT * FROM guilds WHERE id=".$_GET['guild_id']);
$str1 = $str->fetch_assoc();
$number = $str1['rating'] + 1;
$query2 = mysqli_query($con, "UPDATE guilds SET rating = '{$number}' WHERE id='{$_GET['guild_id']}'");
echo "UPDATE guilds SET rating = '{$number}' WHERE id='{$_GET['guild_id']}'";
header('location: admin.php');
 ?>