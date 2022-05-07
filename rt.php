<?php 
session_start();
include "connect.php";
$query1 = mysqli_query($con, "UPDATE treb SET text = '{$_POST['text']}' WHERE id='{$_POST['id']}'");
echo "UPDATE treb SET text = '{$_POST['text']}' WHERE id='{$_POST['id']}'";
header('location: treb.php?guild_id='.$_POST['guild_id']);
 ?>