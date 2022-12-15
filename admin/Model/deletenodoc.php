<?php
include '../Model/koneksi.php';
// sql to delete a record
$row=$_GET['no_dokumen'];
$sql = "DELETE FROM no_doc WHERE no_dokumen='$row'";

if ($link->query($sql) === TRUE) {
   echo'<script language="javascript">';
    echo'alert("Sukses Menghapus Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarnodoc.php">';
} else {
    echo'<script language="javascript">';
    echo'alert("Gagal Menghapus Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarnodoc.php">';
    exit;
      } 
?>