<?php
session_start();
include 'connect.php'
?>

<html>
<head>
	<title>Home</title>
</head>
<body>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">

  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="home.php"><?php echo $_SESSION['name']?></a>

        <?php 
         $name=$_SESSION['name'];
           $sql = "SELECT 	* FROM signup where name='$name'";
              $result = $conn->query($sql);
               if ($result->num_rows > 0) {
       
               while($row = $result->fetch_assoc()) {
		       $location= $row["image"];
        	echo "<img src='$location'  class='img-circle' width='50px' height='50px'>";
           		}
           	}
           ?>
        	

      </div>
      
      
        
    </div>
  </div>
  <div class="container otstup ">
  	<div class="row">
  		<div class="col-ld-8">
  			<!-- буде пошук користувачів -->
  		</div>
  	</div>
  </div>


  <div class="container otstup">
  	<div class="row">
		<div class="col-ld-8 ">
			<?php
			$id=$_SESSION['id'];

			$sql="SELECT *from signup";
			$result=$conn->query($sql);
			  if ($result) {
       		
               while($r=mysqli_fetch_row($result))
                {


                  if($r[1]!='' && $r[0]!=$id){
                    $location=$r[3];
               	echo "
                <br>
               		<table width='100%' >
                  <form action='user.php' method='post'>
               <img src='$location'   width='50px' height='50px'>
				<tr class='table-dark'> <th class='h1'>Login $r[1]</th></tr>
        <tr><th>
        <input type='hidden' name='idUser' value='$r[0]' >
        <input type='submit' value='Go to this user'></input>  </th></tr>
        </form>
        </table>
        <br>
        ";
         		}
           }
       }
			
		


				?>

		</div>  		
  	</div>
  </div>





</body>
</html>