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
                     <h2>Form Data PPK</h2>   
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <?php 
                   //connection
                 include 'Model/koneksi.php';

                  //ngambil data
                  $row=$_GET['no_dokumen'];
                  //query
                  $sql="SELECT * FROM no_doc where no_dokumen='$row'";
                  $query=mysqli_query($link,$sql);
                  $row=mysqli_fetch_array($query, MYSQLI_ASSOC);
                  ?>
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <i class="glyphicon glyphicon-edit"></i> 
                            Silahkan Edit Data PPK !
                        </div>
                        <div class="panel-body">
                            <div class="row">
                             <form method="post" action="Model/updatenodoc.php">
                               <table width="800" height="528" border="0" align="center">
                                   <tr>
                                     <td width="198" height="45"><label>Nomor Dokumen </label></td>
                                     <td width="17">:</td>
                                     <td width="326"><input type="text" class="form-control" name="no_dokumen" size="40" value="<?php echo $row["no_dokumen"];?>" readonly></td>
                                   </tr>
                                   <tr>
                                     <td width="198" height="45"><label>Kegiatan</label></td>
                                     <td width="17">:</td>
                                     <td width="326"><textarea class="form-control" name="kegiatan" rows="3"><?php echo $row['kegiatan'];?></textarea></td>
                                   </tr>
                                   <tr>
                                     <td width="198" height="45"><label>Jenis Dokumen</label></td>
                                     <td width="17">:</td>
                                     <td width="326"><input type="text" class="form-control" name="jenis_dok" size="40" value="<?php echo $row["jenis_dok"];?>"></td>
                                   </tr>
                                   <tr>
                                     <td width="198" height="45"><label>Quota</label></td>
                                     <td width="17">:</td>
                                     <td width="326"><input type="text" class="form-control" name="quota" size="40" value="<?php echo $row["quota"];?>"></td>
                                   </tr>
                                   <tr>
                                     <td width="198" height="45"><label>Actual</label></td>
                                     <td width="17">:</td>
                                     <td width="326"><input type="text" class="form-control" name="actual" size="40" value="<?php echo $row["actual"];?>"></td>
                                   </tr>
                                   <tr>
                                     <td width="198" height="45"><label>Durasi (Hari)</label></td>
                                     <td width="17">:</td>
                                     <td width="326"><input type="text" class="form-control" name="durasi" size="40" value="<?php echo $row["durasi"];?>"></td>
                                   </tr>
                                   <tr>
                                     <td width="198" height="45"><label>Mulai</label></td>
                                     <td width="17">:</td>
                                     <td width="326"><input type="date" class="form-control" name="mulai" value="<?php echo $row["mulai"];?>"></td>
                                   </tr>
                                   <tr>
                                     <td width="198" height="45"><label>Selesai</label></td>
                                     <td width="17">:</td>
                                     <td width="326"><input type="date" class="form-control" name="selesai" value="<?php echo $row["selesai"];?>"></td>
                                   </tr>
                                   <tr>
                                     <td colspan="2">&nbsp;</td>
                                     <td align="right"><input type="submit" class="btn btn-success btn-submit" name="simpan" value="Update">
                                     <a href="daftarnodoc.php" class="btn btn-default btn-reset">Batal</a></td>
                                   </tr>
                                 </table>
                               </tr>
                               </table>
                             </form>
                            <?php
                            mysqli_close($link);
                            ?>
                            </div>
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
