<?php 
session_start();
include "connect.php";
$query1 = mysqli_query($con, "INSERT INTO users  (login, email, pass, role, balance, guild_id, id) VALUES ('{$_POST['login']}', '{$_POST['email']}', '{$_POST['pass']}',1, 0, 0, NULL)");
header('location: go.php');
 ?>