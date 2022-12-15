<?php
include '../Model/koneksi.php';

$sql="UPDATE ppk SET 
nama_ppk='".$_POST["nama_ppk"]."',
jabatan_ppk='".$_POST["jabatan_ppk"]."',
instansi='".$_POST["instansi"]."' WHERE NIP='".$_POST["NIP"]."'";

$query=mysqli_query($link,$sql);

if($query){
	echo'<script language="javascript">';
    echo'alert("Sukses Mengupdate Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarppk.php">';
} else {
    echo'<script language="javascript">';
    echo'alert("Gagal Mengupdate Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarppk.php">';
    exit;
} 
?>