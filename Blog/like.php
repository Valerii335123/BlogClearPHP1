<?php 

      include'connect.php';
        $idp=$_POST['idp'];
        $s="SELECT*FROM posts WHERE id=$idp";
    
        $r=$conn->query($s);
        if($r)
        while($dd=mysqli_fetch_row($r))
        {

            $like=11;
        $like=$dd[5]+1;
        echo "$like";
        $k="UPDATE posts SET lik='$like' WHERE id='$idp' ";
       $rr=$conn->query($k);
        }

 ?>