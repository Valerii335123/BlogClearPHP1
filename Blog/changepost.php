<?php
session_start();
include 'connect.php'
?>
<html>
<head>
	<title>Enter Page</title>
</head>
<body>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">

  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"><?php echo $_SESSION['name']?></a>
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
      <!-- navbar-right положенні елемента шапки зправа -->
        <ul class="nav navbar-nav navbar-right">
          
          <li><a href="home.php" id="reg">Go back</a></li>
          
        </ul>
    </div>
  </div>



  <div class="container otstup">
  	<div class="row">
		<div class="col-ld-8 ">
      <?php
      $id=$_POST['idpost'];
        $sql="SELECT * from posts where id='$id'";
//вибір з бази
$result=$conn->query($sql);
if($result){
  //зчитую по одному записі та перевіряю чи є такий користавач

while ($r=mysqli_fetch_row($result)) 
{
    
   echo "<form class='font' action='updatepost.php' method='POST'>
          <input type='hidden' name='idpost' value='$r[0]' >
        <div class='form-group'>
        <label >Title</label> 
        <input type='text' class='form-control form-control-lg' name='title' value='$r[2]'  >
        </div>
        
        <div class='form-group'>
        <label>Post</label>
        <textarea type='text' class='form-control form-control-lg' name='post'  >$r[3]</textarea>
        </div>
        <input type='submit' name='Enter' value='Enter'>
      </form>";
}

}



        ?>
			
		</div>  		
  	</div>
  </div>





</body>
</html>