<?php 

session_start();
session_destroy();
echo'<script language="javascript">';
    echo'alert("Anda Sudah Keluar dari Halaman Admin.")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL= ../index.html">';
?>