<?php
include '../Model/koneksi.php';
// sql to delete a record
$row=$_GET['NIP'];
$sql = "DELETE FROM ppk WHERE NIP='$row'";

if ($link->query($sql) === TRUE) {
   echo'<script language="javascript">';
    echo'alert("Sukses Menghapus Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarppk.php">';
} else {
    echo'<script language="javascript">';
    echo'alert("Gagal Menghapus Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarppk.php">';
    exit;
      } 
?>