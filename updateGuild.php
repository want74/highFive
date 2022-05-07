<?php 
session_start();
include "connect.php";
if ($_POST['name']!=NULL){
    $query1 = mysqli_query($con, "UPDATE guilds SET name = '{$_POST['name']}' WHERE gm_id='{$_SESSION['user_id']}'");
    echo 'name';
}
if ($_POST['description']!=NULL){
    $query1 = mysqli_query($con, "UPDATE guilds SET description = '{$_POST['description']}' WHERE gm_id='{$_SESSION['user_id']}'");
    echo 'description';
}
if ($_POST['discord']!=NULL){
    $query1 = mysqli_query($con, "UPDATE guilds SET discord = '{$_POST['discord']}' WHERE gm_id='{$_SESSION['user_id']}'");
    echo 'discord';
}
if ($_POST['img']!=NULL){
    $query1 = mysqli_query($con, "UPDATE guilds SET img = '{$_POST['img']}' WHERE gm_id='{$_SESSION['user_id']}'");
    echo 'img';
}
if ($_POST['kit_id']!=NULL){
    $query1 = mysqli_query($con, "UPDATE guilds SET kit_id = '{$_POST['kit_id']}' WHERE gm_id='{$_SESSION['user_id']}'");
    echo 'kit_id';
}
if ($_POST['level']!=NULL){
    $query1 = mysqli_query($con, "UPDATE guilds SET level = '{$_POST['level']}' WHERE gm_id='{$_SESSION['user_id']}'");
    echo 'level';
}
header('location: index.php');
 ?>