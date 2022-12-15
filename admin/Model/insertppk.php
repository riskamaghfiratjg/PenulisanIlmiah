<?php
include '../Model/koneksi.php';
 $NIP=$_POST['NIP'];
 $nama_ppk=$_POST['nama_ppk'];
 $jabatan_ppk=$_POST['jabatan_ppk'];
 $instansi=$_POST['instansi'];

$sql="INSERT INTO ppk values('$NIP','$nama_ppk','$jabatan_ppk','$instansi')";

$hasil=mysqli_query($link,$sql);

  if($hasil) {
    echo'<script language="javascript">';
    echo'alert("Sukses Menambahkan Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarppk.php">';
    exit;

      } else{
    echo'<script language="javascript">';
    echo'alert("Gagal Menambahkan Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarppk.php">';
    exit;
      } 
?>