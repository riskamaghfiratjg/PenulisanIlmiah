<?php
include '../Model/koneksi.php';
 $kode_lelang=$_POST['kode_lelang'];
 $kegiatan=$_POST['kegiatan'];
 $pekerjaan=$_POST['pekerjaan'];
 $pagu=$_POST['pagu'];
 $hps=$_POST['hps'];
 $lokasi=$_POST['lokasi'];
 $jangka_waktu=$_POST['jangka_waktu'];
 $lingkup=$_POST['lingkup'];
 $bidang=$_POST['bidang'];
 $sumber_dana=$_POST['sumber_dana'];
 $NIP=$_POST['NIP'];
 $nama_pokja=$_POST['nama_pokja'];
 $ketua=$_POST['ketua'];
 $sekre=$_POST['sekre'];
 $a1=$_POST['a1'];
 $a2=$_POST['a2'];
 $a3=$_POST['a3'];

$sql="INSERT INTO paket values('$kode_lelang','$kegiatan','$pekerjaan','$pagu','$hps','$lokasi','$jangka_waktu','$lingkup','$bidang','$sumber_dana','$NIP','$nama_pokja','$ketua','$sekre','$a1','$a2','$a3')";

$hasil=mysqli_query($link,$sql);
?>
  <?php 
  $cekdata=mysqli_query($link,"Select nama_pokja from paket where nama_pokja='$nama_pokja'");
  if(mysqli_num_rows($cekdata)>0){
    echo'<script language="javascript">';
    echo'alert("Nama Pokja/Paket telah diinput sebelumnya. Silahkan dicek kembali")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../formpaket.php">';
    exit; 
?>
<?php
  }  else{
    $sql="INSERT INTO paket values('$kode_lelang','$kegiatan','$pekerjaan','$pagu','$hps','$lokasi','$jangka_waktu','$lingkup','$bidang','$sumber_dana','$NIP','$nama_pokja','$ketua','$sekre','$a1','$a2','$a3')";
    $result=mysqli_query($link,$sql);
    echo'<script language="javascript">';
    echo'alert("Sukses Menambahkan Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarpaket.php">';
    exit;
  }
?>