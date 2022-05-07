<?php 
session_start();
include "connect.php";
$query1 = mysqli_query($con, "UPDATE users SET guild_id = 0 WHERE id='{$_SESSION['user_id']}'");
echo 'name';
header('location: guild.php?guild_id='.$_GET['guild_id']);
 ?>