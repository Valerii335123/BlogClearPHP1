<?php

include 'connect.php';
$log=$_POST['log'];
$pass=$_POST['pass'];
$passn=$_POST['passn']; 

//створюю команду для додавання в бд
if($pass==$passn){
$sql="insert into signup(name,pass)

values('$log','$pass')";
//додаю в бд
$result=$conn->query($sql);
header("Location:index.php");
}
else header("Location:registration.php");
 ?>