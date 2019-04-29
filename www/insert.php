<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $id=$_POST['id'];
 $nim=$_POST['nim'];
 $nama=$_POST['nama'];
 $jurusan=$_POST['jurusan'];
 $telp=$_POST['telp'];
 
 $q=mysqli_query($con,"INSERT INTO `daftar` (`id`,`nim`,`nama`,`jurusan`,`telp`) VALUES ('$id','$nim','$nama','$jurusan','$telp')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>
