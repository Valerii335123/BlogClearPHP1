<?php
session_start();
include 'connect.php';
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
           $sql = "SELECT   * FROM signup where name='$name'";
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
          
          <li><a href="exit.php" id="reg">Exit</a></li>
          
        </ul>
    </div>
  </div>
  <div class="container otstup ">
    <div class="row">
      <div class="col-ld-8">
          
        

<?php
                 include("connect.php"); 
           $username=$_SESSION['name'];

           if(isset($_POST['submit']))
          {
  $name=$_FILES['myfile']['name'];
  $tmp_name=$_FILES['myfile']['tmp_name'];
  
  if($name)
  {
    //оновлення зображення
  $location="image/$name";
    move_uploaded_file($tmp_name,$location);  
  $query=mysqli_query($conn,"UPDATE signup SET image='$location' WHERE name='$username'");
   
      }
  else 
    die("Please select a file");
}
echo "<br>";
echo "

<form action='addphoto.php' method='post' enctype='multipart/form-data'>
  
<input type='file' name='myfile' class='btn btn-primary btn-lg btn-block'>
<input type='submit' name='submit' value='Change Your Avatar' class='btn btn-primary btn-lg btn-block'>
</form>
";
?>
      </div>
    </div>
  </div>

