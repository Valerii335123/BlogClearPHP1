<?php 
session_start();
//підключення файлу з базою
include 'connect.php';
//передаю інформацію з форми
$uname=$_POST['log'];
$pass=$_POST['pass'];


//sql запит
$sql="SELECT * from signup";
//вибір з бази
$result=$conn->query($sql);
if($result)
	//зчитую по одному записі та перевіряю чи є такий користавач
while ($r=mysqli_fetch_row($result)) 
{
		
	 if($r[1]==$uname && $r[2]==$pass)
	{

		//створююю сесію
	 	$_SESSION['name']=$uname;
	 	$_SESSION['id']=$r[0];
	
//перенаправлення
header("Location: home.php");
}

}


echo "<a href='index.php'>Login or pass not right</a>";

?>