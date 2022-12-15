<?php
include '../Model/koneksi.php';
// sql to delete a record
$row=$_GET['id_sp'];
$sql = "DELETE FROM surat_penawaran WHERE id_sp='$row'";

if($link->query($sql) === TRUE){
    echo'<script language="javascript">';
    echo'alert("Sukses Menghapus Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarsuratpenawaran.php">';
} else {
    echo'<script language="javascript">';
    echo'alert("Gagal Menghapus Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarsuratpenawaran.php">';
    exit;
} 
?>