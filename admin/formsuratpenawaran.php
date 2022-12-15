<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/logo.png">
    <title>ULP Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">ULP admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a></div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
                    <li>
                        <a class="active-menu"  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                     <li  >
                        <a  href="#"><i class="fa fa-edit fa-3x"></i> Form Data <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="formppk.php">Form PPK</a>
                            </li>
                            <li>
                                <a href="formpaket.php">Form Paket</a>
                            </li>
                            <li>
                                <a href="formnodoc.php">Form No. Dokumen</a>
                            </li>
                            <li>
                                <a href="formdaftarpenawar.php">Form Penawaran</a>
                            </li>
                            <li>
                                <a href="formberitaacara.php">Form Berita Acara</a>
                            </li>
                            <li>
                                <a href="formsuratpenawaran.php">Ketersediaan Surat Penawaran dan Penentuan Hasil Evaluasi</a>
                            </li>
                                  
                            </ul>
                    </li>                 
                   <li  >
                        <a  href="#"><i class="fa fa-table fa-3x"></i> Daftar Data <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="daftarppk.php">Daftar PPK</a>
                            </li>
                            <li>
                                <a href="daftarpaket.php">Daftar Paket</a>
                            </li>
                            <li>
                                <a href="daftarnodoc.php">Daftar No. Dokumen</a>
                            </li>
                            <li>
                                <a href="daftarpenawar.php">Daftar Penawar</a>
                            </li>
                            <li>
                                <a href="daftarberitaacara.php">Daftar Berita Acara</a>
                            </li>
                            <li>
                                <a href="daftarsuratpenawaran.php">Daftar Surat Penawaran</a>
                            </li>
                            </ul>
                    </li>  
                    <li><a href="daftarhasilevaluasi.php"><i class="fa fa-edit fa-3x"></i>Hasil Penilaian Evaluasi</a></li>                    
                   <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Hak Akses <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="formhakakses.php">Form Hak Akses</a>
                            </li>
                            <li>
                                <a href="daftarhakakses.php">Daftar Hak Akses</a>
                            </li>
                        </ul>
                      </li>  
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Form Data Ketersediaan Surat Penawaran</h2>   
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <i class="glyphicon glyphicon-edit"></i> 
                           Input Data Ketersediaan Surat Penawaran
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <form method="post" action="Model/insertsuratpenawaran.php">
                              <table width="800" border="0" align="center">
                                <tr>
                                  <td width="350" height="45"><label>Nama Penyedia</label></td>
                                  <td width="19">:</td>
                                  <td width="328">
                                    <select class="form-control" name="nama_perusahaan">
                                    <option>Pilih Nama Penyedia</option>
                                    <?php
                                    include '../admin/Model/koneksi.php';
                                    //SQL Query
                                    $query = "select * from daftar_penawar order by nama_perusahaan";
                                    $hasil = mysqli_query($link,$query);
                                   while($data=mysqli_fetch_array($hasil)){
                                        echo "<option value='$data[nama_perusahaan]'>$data[nama_perusahaan]</option>";
                                   }
                                   ?>
                                  </select>
                                  </td>
                                </tr>
                                <tr>
                                  <td width="350" height="45"><label>Tanda Tangan Surat Penawaran</label></td>
                                  <td width="19">:</td>
                                  <td width="328">
                                    <label class="radio-inline">
                                      <input type="radio" name="ttd_sp" value="Ada"> Ada
                                    </label>
                                    <label class="radio-inline">
                                      <input type="radio" name="ttd_sp" value="Tidak Ada"> Tidak Ada
                                    </label>
                                  </td>
                                </tr>
                                <tr>
                                  <td width="350" height="45"><label>Tujuan Surat Penawaran</label></td>
                                  <td width="19">:</td>
                                  <td width="328">
                                    <label class="radio-inline">
                                      <input type="radio" name="tujuan_sp" value="Sesuai">Sesuai  
                                    </label>
                                    <label class="radio-inline">
                                      <input type="radio" name="tujuan_sp" value="Tidak Sesuai"> Tidak Sesuai
                                    </label>
                                  </td>
                                </tr>
                                <tr>
                                  <td width="350" height="45"><label>Paket Pekerjaan</label></td>
                                  <td width="19">:</td>
                                  <td width="328">
                                    <label class="radio-inline">
                                      <input type="radio" name="paket_sp" value="Sesuai">Sesuai  
                                    </label>
                                    <label class="radio-inline">
                                      <input type="radio" name="paket_sp" value="Tidak Sesuai"> Tidak Sesuai
                                    </label>
                                  </td>
                                </tr>
                                <tr>
                                  <td width="350" height="45"><label>Jangka Waktu Berlakunya Surat Penawaran (45 HK)</label></td>
                                  <td width="19">:</td>
                                  <td width="328">
                                   <input type="text" class="form-control" name="jangka_sp">
                                  </td>
                                </tr>
                                 <tr>
                                  <td width="350" height="45"><label>Jangka Waktu Pelaksanaan</label></td>
                                  <td width="19">:</td>
                                  <td width="328">
                                    <label class="radio-inline">
                                      <input type="radio" name="pelaksanaan_sp" value="Sesuai">Sesuai  
                                    </label>
                                    <label class="radio-inline">
                                      <input type="radio" name="pelaksanaan_sp" value="Tidak Sesuai"> Tidak Sesuai
                                    </label>
                                  </td>
                                </tr>
                                <tr>
                                  <td width="350" height="45"><label>Tanggal Surat Penawaran</label></td>
                                  <td width="19">:</td>
                                  <td width="328">
                                    <label class="radio-inline">
                                      <input type="radio" name="tgl_sp" value="Ada"> Ada
                                    </label>
                                    <label class="radio-inline">
                                      <input type="radio" name="tgl_sp" value="Tidak Ada"> Tidak Ada
                                    </label>
                                  </td>
                                </tr>
                                <tr>
                                  <td width="350" height="45"><label>Penilaian Surat Penawaran</label></td>
                                  <td width="19">:</td>
                                  <td width="328">
                                    <label class="radio-inline">
                                      <input type="radio" name="penilaian_sp" value="Memenuhi Syarat"> Memenuhi Syarat
                                    </label>
                                    <label class="radio-inline">
                                      <input type="radio" name="penilaian_sp" value="Tidak Memenuhi Syarat"> Tidak Memenuhi Syarat
                                    </label>
                                  </td>
                                  </tr>
                                  <tr>
                                  <td width="350" height="45"><label>Hasil Penilaian Evaluasi</label></td>
                                  <td width="19">:</td>
                                  <td width="328">
                                    <label class="radio-inline">
                                      <input type="radio" name="penilaian_evaluasi" value="LULUS"> LULUS
                                    </label>
                                    <label class="radio-inline">
                                      <input type="radio" name="penilaian_evaluasi" value="GUGUR"> GUGUR
                                    </label>
                                  </td>
                                  </tr>
                                <tr>
                                  <td colspan="2">&nbsp;</td>
                                  <td align="right"><button class="btn btn-success btn-submit" name="simpan">SIMPAN</button></td>
                              </table>
                            </form>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
                <!-- /. ROW  -->
                <div class="row"></div>
                <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <!--Scripts--> 
</body>
</html>
