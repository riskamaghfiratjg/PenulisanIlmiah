<?php

include ('../pdf/class.ezpdf.php');
$pdf = new Cezpdf('A4','Portrait');

//mengatur margin dan font
$pdf->ezSetCmMargins(3,3,3,3);
$pdf->selectFont('../pdf/fonts/Times-Roman.afm');

//tampilin gambar di dokumen
$pdf->setStrokeColor(0,0,0,1);

//Teks ditengah untuk judul header
$pdf->addText(100,815,14,'<b>Daftar Perusahaan yang LULUS Evaluasi Adm, Teknis dan Biaya</b>');
$pdf->addText(210,800,12,'<b>Unit Layanan Pengadaan Barang/Jasa</b>');
$pdf->addText(280,785,10,'<b>Provinsi Riau</b> ');

//garis atas untuk header
$pdf->line(2,770,593,770);

//teks diatas garis
$pdf->addText(50,100,10,'<b>Catatan :</b> ');
$pdf->addText(50,90,8,'Perusahaan yang LULUS diwajibkan untuk datang ke Kantor ULP yang beralamat di :</b>');
$pdf->addText(50,80,8,'Jl. Jend. Sudirman No. 464 Pekanbaru, Kantor Walikota Pekanbaru</b>');
$pdf->addText(50,70,8,'Gedung Dinas Penanaman Modal Dan Pelayanan Terpadu Satu Pintu Lt. 3</b>');
$pdf->addText(50,60,8,'Untuk persyaratan dan penyerahan berkas selanjutnya.</b>');

//garis bawah untuk header
$pdf->line(2,50,840,50);

//koneksi database
include '../Model/koneksi.php';

$sql="SELECT * FROM surat_penawaran WHERE penilaian_evaluasi='LULUS'";
$result=mysqli_query($link,$sql);
if(mysqli_num_rows($result) > 0){
	$i=1;
	while ($row = mysqli_fetch_array($result)){

		//format nampilin data
		$data[$i]=array('No'=> $i, 
			'Nama Perusahaan'=>"$row[nama_perusahaan]",
			'Penilaian Surat Penawaran'=>"$row[penilaian_sp]",
		'Hasil Penilaian Evaluasi'=>"$row[penilaian_evaluasi]");
		$i++;
	}


//tampilkan dalam bentuk tabel
	$pdf->ezTable($data,'','','');

//Penomoran halaman
	$pdf->ezStartPageNumbers(700, 20, 8);
	$pdf->ezStream();

}
$pdf->Output('Daftar Perusahaan.pdf','I');
?>