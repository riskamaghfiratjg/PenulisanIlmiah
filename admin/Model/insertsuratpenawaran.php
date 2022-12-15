<?php
include '../Model/koneksi.php';

 $nama_perusahaan=$_POST['nama_perusahaan'];
 $ttd_sp=$_POST['ttd_sp'];
 $tujuan_sp=$_POST['tujuan_sp'];
 $paket_sp=$_POST['paket_sp'];
 $jangka_sp=$_POST['jangka_sp'];
 $pelaksanaan_sp=$_POST['pelaksanaan_sp'];
 $tgl_sp=$_POST['tgl_sp'];
 $penilaian_sp=$_POST['penilaian_sp'];
 $penilaian_evaluasi=$_POST['penilaian_evaluasi'];
$sql="INSERT INTO surat_penawaran values(NULL,'$nama_perusahaan','$ttd_sp','$tujuan_sp','$paket_sp','$jangka_sp','$pelaksanaan_sp','$tgl_sp','$penilaian_sp','$penilaian_evaluasi')";

$hasil=mysqli_query($link,$sql);

  if($hasil) {
    echo'<script language="javascript">';
    echo'alert("Sukses Menambahkan Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarsuratpenawaran.php">';
    exit;

      } else{
    echo'<script language="javascript">';
    echo'alert("Gagal Menambahkan Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarsuratpenawaran.php">';
    exit;
      } 
?>