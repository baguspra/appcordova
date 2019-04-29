<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $nim=$_POST['nim'];
 $nama=$_POST['nama'];
 $jurusan=$_POST['jurusan'];
 $telp=$_POST['telp'];
 
 $q=mysqli_query($con,"UPDATE `daftar` SET `id`='$id',`nim`='$nim',`nama`='$nama',`jurusan`='$jurusan',`telp`='$telp' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
