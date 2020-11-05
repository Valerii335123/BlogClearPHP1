<?php
session_start();
include 'connect.php';



if(isset($_POST['like']))
        {
              $idp=$_POST['idp'];
        $s="SELECT*FROM posts WHERE id=$idp";
    
        $r=$conn->query($s);
        if($r)
        while($dd=mysqli_fetch_row($r))
        {

            $like=11;
        $like=$dd[5]+1;
        
        $k="UPDATE posts SET lik='$like' WHERE id='$idp' ";
       $rr=$conn->query($k);
       header('Location: home.php');

        }
        }      
        ?>
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
  			<?php
        $id=$_POST['idUser'];
           $sql = "SELECT   * FROM signup where id='$id'";
              $result = $conn->query($sql);
               if ($result->num_rows > 0) {
       
               while($row = $result->fetch_assoc()) {
           $location= $row["image"];
          
          echo "<p class='h1'>";
          echo $row['name'];
          echo "</p> <br>";
          echo "<img src='$location'  class='img-circle' width='250px' height='250px'>";
              }
            }
         ?>
  		</div>
  	</div>
  </div>


  <div class="container otstup">
  	<div class="row">
		<div class="col-ld-8 ">
			<?php
      $id=$_POST['idUser'];

      $sql="SELECT *from posts where idUser=$id";
      $result=$conn->query($sql);
        if ($result) {
          
               while($r=mysqli_fetch_row($result))
                {



                echo "
                  <table width='100%' >
        <tr class='table-dark'> <th class='h1'>$r[2]</th></tr>
<tr class='bg-success'><th class='h3 z'>$r[3]</th></tr>
<tr class='bg-warning'><th class='h3 z'>$r[4]</th></tr>
<tr class='bg-danger'><th class='h4 z'>like $r[5]</th></tr>
<tr><th>
            <form   method='POST'>
            <input type='hidden' name='idp' value='$r[0]' >
            <input type='submit' value='like+' name='like'>
            </form>
            </tr></th>
          <tr class='bg-danger'><th class='h4 z'><details><summary>coments</summary>"
         ;
            $idpo=$r[0];
             
            $sq="SELECT*from coments where idpost=$idpo";
              $res=$conn->query($sq);
               if ($res) {
          
               while($d=mysqli_fetch_row($res))
                {

                    $s="SELECT*from signup where id=$i$d[2]";
              $re=$conn->query($s);
              $q=mysqli_fetch_row($re); 
                  echo "<P>    </P>From  $q[1]  in   $d[4]  <br>   $d[3] <br> ";

                }
                
            }
            echo "<label>add new coment</label>
            <form action='somepost.php' method='POST'>
            <input type='hidden' name='idpost' value='$r[0]' >
            <textarea type='text' class='form-control form-control-lg' name='coment'></textarea>
            <input type='submit' name='send'>
            </form>
            ";
       

         echo " 
         </details></th></tr>
     </table>
      <br><br>";


           }
       }
        

        ?>

		</div>  		
  	</div>
  </div>





</body>
</html>