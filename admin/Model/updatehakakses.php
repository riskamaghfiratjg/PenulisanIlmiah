<?php
include '../Model/koneksi.php';

$sql="UPDATE login SET 
password='".$_POST["password"]."' WHERE email='".$_POST["email"]."'";

$query=mysqli_query($link,$sql);

if($query){
	echo'<script language="javascript">';
    echo'alert("Sukses Mengupdate Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarhakakses.php">';
} else {
    echo'<script language="javascript">';
    echo'alert("Gagal Mengupdate Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarhakakses.php">';
    exit;
} 
?>