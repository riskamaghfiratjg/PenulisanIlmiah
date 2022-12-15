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
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
                     <h2>Daftar Surat Penawaran</h2>   
                    </div>
                </div>
                 <hr />
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="glyphicon glyphicon-user"></i> Data Surat Penawaran
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Perusahaan</th>
                                            <th>TTD</th>
                                            <th>Tujuan</th>
                                            <th>Paket</th>
                                            <th>Waktu Berlaku</th>
                                            <th>Pelaksanaan</th>
                                            <th>Tgl Surat</th>
                                            <th>Penilaian</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                            include '../admin/Model/koneksi.php';
                                            $no=0;
                                            $result = mysqli_query($link, "SELECT * FROM surat_penawaran ORDER BY nama_perusahaan DESC");
                                            while($row = mysqli_fetch_array($result)) {
                                            $no++;
                                        ?>
                                        <tr class="">
                                            <td><?php echo $no;?></td>
                                            <td><?php echo $row['nama_perusahaan'];?></td>
                                            <td><?php echo $row['ttd_sp'];?></td>
                                            <td><?php echo $row['tujuan_sp'];?></td>
                                            <td><?php echo $row['paket_sp'];?></td>
                                            <td><?php echo $row['jangka_sp'];?></td>
                                            <td><?php echo $row['pelaksanaan_sp'];?></td>
                                            <td><?php echo $row['tgl_sp'];?></td>
                                            <td><?php echo $row['penilaian_sp'];?></td>
                                            <td>
                                               <a data-toggle='tooltip' data-placement='top' title='Ubah' style='margin-right:5px' class='btn btn-success btn-sm' href="../admin/editsuratpenawaran.php?nama_perusahaan=<?php echo $row['nama_perusahaan'];?>">
                            <i class='glyphicon glyphicon-edit'></i>
                          </a>
                                               <a data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger btn-sm" href="../admin/Model/deletesuratpenawaran.php?id_sp=<?php echo $row['id_sp'];?>" onclick="return confirm('Anda yakin ingin menghapus Nama Perusahaan <?php echo $row['nama_perusahaan']; ?>?');">
                            <i class="glyphicon glyphicon-trash"></i>
                          </a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
            <div class="row"></div>
                <!-- /. ROW  -->
            <div class="row"></div>
                <!-- /. ROW  -->
            <div class="row"></div>
                <!-- /. ROW  -->
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>   
</body>
</html>