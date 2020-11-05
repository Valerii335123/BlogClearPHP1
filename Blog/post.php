<?php
session_start();
include 'connect.php';
$title=$_POST['title'];
$post=$_POST['post'];
$idU=$_SESSION['id'];

$s="insert into posts(idUser,title,post)

values('$idU','$title','$post')";
$result=$conn->query($s);
header("Location: home.php");

  ?>