<?php
include '../Model/koneksi.php';
// sql to delete a record
$row=$_GET['kode_lelang'];
$sql = "DELETE FROM paket WHERE kode_lelang='$row'";

if ($link->query($sql) === TRUE) {
   echo'<script language="javascript">';
    echo'alert("Sukses Menghapus Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarpaket.php">';
} else {
    echo'<script language="javascript">';
    echo'alert("Gagal Menghapus Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarpaket.php">';
    exit;
      } 
?>