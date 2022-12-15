<?php
include '../Model/koneksi.php';
 $NPWP=$_POST['NPWP'];
 $penawaran_adm=$_POST['penawaran_adm'];
 $penawaran_teknis=$_POST['penawaran_teknis'];
 $rekapitulasi=$_POST['rekapitulasi'];
 $rincian_biaya=$_POST['rincian_biaya'];
 $dok_kualifikasi=$_POST['dok_kualifikasi'];
 $hasil_penilaian=$_POST['hasil_penilaian'];

$sql="INSERT INTO berita_acara values(NULL,'$NPWP','$penawaran_adm','$penawaran_teknis','$rekapitulasi','$rincian_biaya','$dok_kualifikasi','$hasil_penilaian')";

$hasil=mysqli_query($link,$sql);

  if($hasil) {
    echo'<script language="javascript">';
    echo'alert("Sukses Menambahkan Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarppk.php">';
    exit;

      } else{
    echo'<script language="javascript">';
    echo'alert("Gagal Menambahkan Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../formppk.php">';
    exit;
      } 
?>