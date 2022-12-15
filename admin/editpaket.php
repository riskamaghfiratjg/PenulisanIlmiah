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
                  $row=$_GET['kode_lelang'];
                  //query
                  $sql="SELECT * FROM paket where kode_lelang='$row'";
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
                             <form method="post" action="Model/updatepaket.php">
                              <table width="800" border="0" align="center">
                               <tr>
                                  <td width="350" height="45"><label>Kode Lelang</label></td>
                                  <td width="19">:</td>
                                  <td width="328"><input type="text" class="form-control" name="kode_lelang" size="40" value="<?php echo $row["kode_lelang"];?>" readonly></td>
                                </tr>
                                <tr>
                                  <td width="350" height="89"><label>Kegiatan</label></td>
                                  <td width="19">:</td>
                                  <td width="328"><textarea class="form-control" name="kegiatan" rows="3" required><?php echo $row['kegiatan'];?></textarea></td>
                                </tr>
                                <tr>
                                  <td width="350" height="80"><label>Pekerjaan</label></td>
                                  <td width="19">:</td>
                                  <td width="328"><textarea class="form-control" name="pekerjaan" rows="3" required><?php echo $row['pekerjaan'];?></textarea></td>
                                </tr>
                                <tr>
                                  <td width="350" height="45"><label>Pagu Dana</label></td>
                                  <td width="19">:</td>
                                  <td width="328"><input type="text" class="form-control" name="pagu" size="40" value="<?php echo $row["pagu"];?>"></td>
                                </tr>
                                <tr>
                                  <td width="350" height="45"><label>HPS</label></td>
                                  <td width="19">:</td>
                                  <td width="328"><input type="text" class="form-control" name="hps" size="40" value="<?php echo $row["hps"];?>"></td>
                                </tr>
                                <tr>
                                  <td width="350" height="45"><label>Lokasi</label></td>
                                  <td width="19">:</td>
                                  <td width="328"><input type="text" class="form-control" name="lokasi" size="40" value="<?php echo $row["lokasi"];?>"></td>
                                </tr>
                                <tr>
                                  <td width="350" height="45"><label>Jangka Waktu Pekerjaan</label></td>
                                  <td width="19">:</td>
                                  <td width="328"><input type="text" class="form-control" name="jangka_waktu" size="40" value="<?php echo $row["jangka_waktu"];?>"></td>
                                  <td>&nbsp;</td>
                                  <td width="328"><label>HARI</label></td>
                                  </td>
                                </tr>
                                <tr>
                                  <td width="350" height="45"><label>Lingkup Pekerjaan</label></td>
                                  <td width="19">:</td>
                                  <td width="328"><input type="text" class="form-control" name="lingkup" size="40" value="<?php echo $row["lingkup"];?>"></td>
                                </tr>
                                <tr>
                                  <td width="350" height="45"><label>Bidang/Sub Bidang</label></td>
                                  <td width="19">:</td>
                                  <td width="328"><textarea class="form-control" name="bidang" rows="3" required><?php echo $row['bidang'];?></textarea></td>
                                </tr>
                                <tr>
                                  <td width="350" height="45"><label>Sumber Dana</label></td>
                                  <td width="19">:</td>
                                  <td width="328">
                                  <?php 
                                  if($row['sumber_dana']=='APBD'){ ?>
                                    <label class="radio-inline">
                                    <input type="radio" name="sumber_dana" value="APBD" checked> APBD
                                    </label>

                                    <label class="radio-inline">
                                    <input type="radio" name="sumber_dana" value="APBN"> APBN
                                    </label>
                                  <?php 
                                  } else { ?>
                                  <label class="radio-inline">
                                    <input type="radio" name="sumber_dana" value="APBD"> APBD
                                    </label>
                                    <label class="radio-inline">
                                    <input type="radio" name="sumber_dana" value="APBN" checked> APBN
                                    </label>
                                  </td>
                                <?php 
                                  }
                                ?>
                                </tr>
                                <tr>
                                  <td width="350" height="45"><label>NIP PPK</label></td>
                                  <td width="19">:</td>
                                  <td width="328">
                                    <select class="form-control" name="NIP"required>
                                    <option value="<?php echo $row["NIP"];?>"><?php echo $row["NIP"];?></option>
                                    <?php
                                    include '../admin/Model/koneksi.php';
                                    //SQL Query
                                    $query = "select * from ppk";
                                    $hasil = mysqli_query($link,$query);
                                   while($data=mysqli_fetch_array($hasil)){
                                        echo "<option value=$data[NIP]>$data[NIP]</option>";
                                   }
                                   ?>
                                  </select>
                                  </td>
                                </tr>
                                <tr>
                                  <td width="350" height="45"><label>Nama POKJA</label></td>
                                  <td width="19">:</td>
                                  <td width="328"><input type="text" class="form-control" name="nama_pokja" size="40" value="<?php echo $row["nama_pokja"];?>" readonly></td>
                                </tr>
                                <tr>
                                  <td width="350" height="45"><label>Ketua POKJA</label></td>
                                  <td width="19">:</td>
                                  <td width="328"><input type="text" class="form-control" name="ketua" size="40" value="<?php echo $row["ketua"];?>"></td>
                                </tr>
                                <tr>
                                  <td width="350" height="45"><label>Sekretaris POKJA</label></td>
                                  <td width="19">:</td>
                                  <td width="328"><input type="text" class="form-control" name="sekre" size="40" value="<?php echo $row["sekre"];?>"></td>
                                </tr>
                                <tr>
                                  <td width="350" height="45"><label>Anggota 1</label></td>
                                  <td width="19">:</td>
                                  <td width="328"><input type="text" class="form-control" name="a1" size="40" value="<?php echo $row["a1"];?>"></td>
                                </tr>
                                <tr>
                                  <td width="350" height="45"><label>Anggota 2</label></td>
                                  <td width="19">:</td>
                                  <td width="328"><input type="text" class="form-control" name="a2" size="40" value="<?php echo $row["a2"];?>" ></td>
                                </tr>
                                <tr>
                                  <td width="350" height="45"><label>Anggota 3</label></td>
                                  <td width="19">:</td>
                                  <td width="328"><input type="text" class="form-control" name="a3" size="40" value="<?php echo $row["a3"];?>"></td>
                                </tr>
                                <tr>
                                     <td colspan="2">&nbsp;</td>
                                     <td align="right"><input type="submit" class="btn btn-success btn-submit" name="simpan" value="Update">
                                     <a href="daftarpaket.php" class="btn btn-default btn-reset">Batal</a></td>
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
