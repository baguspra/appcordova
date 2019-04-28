<?php
 include "db.php";
 if(isset($_GET['id_baak']))
 {
 $id_baak=$_GET['id_baak'];
 $q=mysqli_query($con,"delete from `baak` where `id_baak`='$id_baak'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
