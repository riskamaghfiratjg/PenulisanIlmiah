<?php
include '../Model/koneksi.php';

$sql="UPDATE berita_acara SET 
penawaran_adm='".$_POST["penawaran_adm"]."',
penawaran_teknis='".$_POST["penawaran_teknis"]."',
rekapitulasi='".$_POST["rekapitulasi"]."',
rincian_biaya='".$_POST["rincian_biaya"]."',
dok_kualifikasi='".$_POST["dok_kualifikasi"]."',
hasil_penilaian='".$_POST["hasil_penilaian"]."' WHERE NPWP='".$_POST[NPWP]."'";

$query=mysqli_query($link,$sql);

if($query){
	echo'<script language="javascript">';
    echo'alert("Sukses Mengupdate Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarberitaacara.php">';
} else {
    echo'<script language="javascript">';
    echo'alert("Gagal Mengupdate Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarberitaacara.php">';
    exit;
} 
?>