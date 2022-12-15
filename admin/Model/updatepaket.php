<?php
include '../Model/koneksi.php';

$sql="UPDATE paket SET 
kegiatan='".$_POST["kegiatan"]."',
pekerjaan='".$_POST["pekerjaan"]."', 
pagu='".$_POST["pagu"]."',
hps='".$_POST["hps"]."',
lokasi='".$_POST["lokasi"]."',
jangka_waktu='".$_POST["jangka_waktu"]."',
lingkup='".$_POST["lingkup"]."',
bidang='".$_POST["bidang"]."',
sumber_dana='".$_POST["sumber_dana"]."',
NIP='".$_POST["NIP"]."',
ketua='".$_POST["ketua"]."', 
sekre='".$_POST["sekre"]."',
a1='".$_POST["a1"]."',
a2='".$_POST["a2"]."', 
a3='".$_POST["a3"]."' WHERE kode_lelang='".$_POST["kode_lelang"]."' And nama_pokja='".$_POST["nama_pokja"]."' ";

$query=mysqli_query($link,$sql);

if($query){
	echo'<script language="javascript">';
    echo'alert("Sukses Mengupdate Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarpaket.php">';
} else {
    echo'<script language="javascript">';
    echo'alert("Gagal Mengupdate Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarpaket.php">';
    exit;
} 
?>