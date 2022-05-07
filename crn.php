<?php 
session_start();
include "connect.php";
if ($_POST['title']!=NULL){
    $query1 = mysqli_query($con, "UPDATE newsguild SET title = '{$_POST['title']}' WHERE id='{$_POST['id']}'");
    echo 'title';
}
if ($_POST['text']!=NULL){
    $query1 = mysqli_query($con, "UPDATE newsguild SET text = '{$_POST['text']}' WHERE id='{$_POST['id']}'");
    echo 'text';
}
header('location: guild.php?guild_id='.$_POST['guild_id']);
?>