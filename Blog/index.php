<!DOCTYPE html>
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
        <a class="navbar-brand" href="#">MyBlog</a>
      </div>
      <!-- navbar-right положенні елемента шапки зправа -->
        <ul class="nav navbar-nav navbar-right">
          
          <li><a href="registration.php" id="reg">Registration</a></li>
          
        </ul>
    </div>
  </div>



  <div class="container otstup">
  	<div class="row">
		<div class="col-ld-8 ">
			<form class="font" action="login.php" method="POST">
				
				<div class="form-group">
				<label >Login</label>	
				<input type="text" class="form-control form-control-lg" name="log"  >
				</div>
				
				<div class="form-group">
				<label>Password</label>
				<input type="text" class="form-control form-control-lg" name="pass" >
				</div>
				<input type="submit" name="Enter" value="Enter">
			</form>
		</div>  		
  	</div>
  </div>





</body>
</html>