<?php
include '../Model/koneksi.php';
 $no_dokumen=$_POST['no_dokumen'];
 $kegiatan=$_POST['kegiatan'];
 $jenis_dok=$_POST['jenis_dok'];
 $quota=$_POST['quota'];
 $actual=$_POST['actual'];
 $durasi=$_POST['durasi'];
 $mulai=$_POST['mulai'];
 $selesai=$_POST['selesai'];

$sql="INSERT INTO no_doc values('$no_dokumen','$kegiatan','$jenis_dok','$quota','$actual','$durasi','$mulai','$selesai')";

$hasil=mysqli_query($link,$sql);

  if($hasil) {
    echo'<script language="javascript">';
    echo'alert("Sukses Menambahkan Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarnodoc.php">';
    exit;

      } else{
    echo'<script language="javascript">';
    echo'alert("Gagal Menambahkan Data")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL=../daftarnodoc.php">';
    exit;
      } 
?>