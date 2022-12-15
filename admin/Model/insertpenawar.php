<?php
include '../Model/koneksi.php';
 $NPWP=$_POST['NPWP'];
 $nama_perusahaan=$_POST['nama_perusahaan'];
 $nama_direktur=$_POST['nama_direktur'];
 $alamat=$_POST['alamat'];
 $jangka_wp=$_POST['jangka_wp'];
 $harga_penawaran=$_POST['harga_penawaran'];
$sql="INSERT INTO daftar_penawar values('$NPWP','$nama_perusahaan','$nama_direktur','$alamat','$jangka_wp','$harga_penawaran')";

$hasil=mysqli_query($link,$sql);

  if($hasil) {
    echo'<script language="javascript">';
    echo'alert("Sukses Menambahkan Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarpenawar.php">';
    exit;

      } else{
    echo'<script language="javascript">';
    echo'alert("Gagal Menambahkan Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarpenawar.php">';
    exit;
      } 
?>