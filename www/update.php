<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id_baak=$_POST['id_baak'];
 $nama_baak=$_POST['nama_baak'];
 $email=$_POST['email'];
 $telp=$_POST['telp'];
 $alamat=$_POST['alamat'];
 
 $q=mysqli_query($con,"UPDATE `baak` SET `id_baak`='$id_baak',`nama_baak`='$nama_baak',`email`='$email',`telp`='$telp',`alamat`='$alamat' where `id_baak`='$id_baak'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
