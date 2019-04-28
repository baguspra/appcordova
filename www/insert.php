<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $id_baak=$_POST['id_baak'];
 $nama_baak=$_POST['nama_baak'];
 $email=$_POST['email'];
 $telp=$_POST['telp'];
 $alamat=$_POST['alamat'];
 
 $q=mysqli_query($con,"INSERT INTO `baak` (`id_baak`,`nama_baak`,`email`,`telp`,`alamat`) VALUES ('$id_baak','$nama_baak','$email','$telp','$alamat')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>
