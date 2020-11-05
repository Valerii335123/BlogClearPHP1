<?php
session_start();
include 'connect.php';
$idU=$_SESSION['id'];
$idpost=$_POST['idpost'];
$coment=$_POST['coment'];

$s="insert into coments(idpost,iduser,coment)

values('$idpost','$idU','$coment')";
$result=$conn->query($s);
header("Location: home.php");


  ?>
