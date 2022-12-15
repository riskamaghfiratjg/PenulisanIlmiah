<?php
include '../Model/koneksi.php';
 $email=$_POST['email'];
 $password=$_POST['password'];
 
$sql="INSERT INTO login values('$email','$password')";

$hasil=mysqli_query($link,$sql);

  if($hasil) {
    echo'<script language="javascript">';
    echo'alert("Sukses Menambahkan Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarhakakses.php">';
    exit;

      } else{
    echo'<script language="javascript">';
    echo'alert("Gagal Menambahkan Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarakses.php">';
    exit;
      } 
?>