<?php
include '../Model/koneksi.php';

$sql="UPDATE no_doc SET 
kegiatan='".$_POST["kegiatan"]."',
jenis_dok='".$_POST["jenis_dok"]."', 
quota='".$_POST["quota"]."',
actual='".$_POST["actual"]."',
durasi='".$_POST["durasi"]."',
mulai='".$_POST["mulai"]."',
selesai='".$_POST["selesai"]."' WHERE no_dokumen='".$_POST["no_dokumen"]."'";

$query=mysqli_query($link,$sql);

if($query){
	echo'<script language="javascript">';
    echo'alert("Sukses Mengupdate Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarnodoc.php">';
} else {
    echo'<script language="javascript">';
    echo'alert("Gagal Mengupdate Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarnodoc.php">';
    exit;
} 
?>