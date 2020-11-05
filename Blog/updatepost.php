<?php
session_start();
include 'connect.php';
$title=$_POST['title'];
$post=$_POST['post'];
$id=$_POST['idpost'];

$s=" update posts 
set title='$title',post='$post'

where id='$id'";
$result=$conn->query($s);
header("Location: home.php");

  ?>