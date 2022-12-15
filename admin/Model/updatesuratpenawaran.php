<?php
include '../Model/koneksi.php';

$sql="UPDATE surat_penawaran SET 
ttd_sp='".$_POST["ttd_sp"]."',
tujuan_sp='".$_POST["tujuan_sp"]."',
paket_sp='".$_POST["paket_sp"]."',
jangka_sp='".$_POST["jangka_sp"]."',
pelaksanaan_sp='".$_POST["pelaksanaan_sp"]."',
tgl_sp='".$_POST["tgl_sp"]."',
penilaian_sp='".$_POST["penilaian_sp"]."',
penilaian_evaluasi='".$_POST["penilaian_evaluasi"]."' WHERE nama_perusahaan='".$_POST["nama_perusahaan"]."'";

$query=mysqli_query($link,$sql);

if($query){
	echo'<script language="javascript">';
    echo'alert("Sukses Mengupdate Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarsuratpenawaran.php">';
} else {
    echo'<script language="javascript">';
    echo'alert("Gagal Mengupdate Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarsuratpenawaran.php">';
    exit;
} 
?>