<?php
include '../Model/koneksi.php';
// sql to delete a record
$row=$_GET['NPWP'];
$sql = "DELETE FROM berita_acara WHERE NPWP='$row'";

if ($link->query($sql) === TRUE) {
   echo'<script language="javascript">';
    echo'alert("Sukses Menghapus Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarberitaacara.php">';
} else {
    echo'<script language="javascript">';
    echo'alert("Gagal Menghapus Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarberitaacara.php">';
    exit;
      } 
?>