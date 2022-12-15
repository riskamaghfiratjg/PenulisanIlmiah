<?php
include '../Model/koneksi.php';

$sql="UPDATE daftar_penawar SET 
nama_perusahaan='".$_POST["nama_perusahaan"]."',
nama_direktur='".$_POST["nama_direktur"]."',
alamat='".$_POST["alamat"]."',
jangka_wp='".$_POST["jangka_wp"]."',
harga_penawaran='".$_POST["harga_penawaran"]."' WHERE NPWP='".$_POST["NPWP"]."'";

$query=mysqli_query($link,$sql);

if($query){
	echo'<script language="javascript">';
    echo'alert("Sukses Mengupdate Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarpenawar.php">';
} else {
    echo'<script language="javascript">';
    echo'alert("Gagal Mengupdate Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarpenawar.php">';
    exit;
} 
?>