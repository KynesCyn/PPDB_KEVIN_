<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Dashboard | Admin </title>
    <!-- Custom CSS -->
    <link href="assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <style>
   

    .card {
      background-color: #212121;
      border-color: #333;
    }

    .h3,
    .h6 {
      color: #fff;
    }

    .text-muted {
      color: #ccc;
    }

    .footer {
      background-color: #1a1a1a;
    }

    .set-doller,
    i {
      color: #facc2e;
    }
  </style>
</head>

<body>
  
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
     
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="dashboard.php">
                           PPDB
                        </a>
                    </div>
                   
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
               
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                   
                    
                </div>
            </nav>
        </header>
      
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="dashboard.php"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                
                        

                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Menu Admin</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Data Master </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="pages/registrasi.php" class="sidebar-link"><span
                                            class="hide-menu"> Registrasi
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="pages/input_gelombang.php" class="sidebar-link"><span
                                            class="hide-menu"> Gelombang
                                        </span></a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                                    class="hide-menu">Pendaftaran </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="pages/daftar_baru.php" class="sidebar-link"><span
                                            class="hide-menu"> Daftar Baru
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="pages/data_siswa.php" class="sidebar-link"><span
                                            class="hide-menu"> Data Siswa
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="pages/data_kaos.php" class="sidebar-link"><span
                                            class="hide-menu">
                                          Data Kaos
                                        </span></a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i  class="feather-icon icon-wallet"></i><span
                                    class="hide-menu">Pembayaran </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="pages/transaksi.php" class="sidebar-link"><span
                                            class="hide-menu"> Transaksi
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="pages/data_pembayaran.php" class="sidebar-link"><span
                                            class="hide-menu"> Data Pembayaran
                                        </span></a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="logout.php"
                                aria-expanded="false"><i data-feather="sidebar" class="feather-icon"></i><span
                                    class="hide-menu">Log Out
                                </span></a>
                        </li>                      
                        <li class="list-divider"></li>
                       

                        

                       
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
       
        <div class="page-wrapper">
           
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Dashboard</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                   
                </div>
            </div>
           
            <div class="container-fluid">
            <?php
            include 'koneksi.php';
          $query = "SELECT COUNT(*) AS total_siswa FROM data_siswa";
          $result = mysqli_query($koneksi, $query);

          if (!$result) {
            die("Query error: " . mysqli_error($koneksi));
          }

          $row = mysqli_fetch_assoc($result);
          $total_siswa = $row['total_siswa'];

          $koneksi->close();
          ?>
               
                <div class="card-group">
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h2 class="text-dark mb-1 font-weight-medium"><?php echo $row['total_siswa']; ?></h2>
                                       
                                    </div>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Jumlah Pendaftar</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="user-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h2 class="text-dark mb-1 font-weight-medium">5</h2>
                                       
                                    </div>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Jumlah Jurusan</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="file-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
            include 'koneksi.php';

            $query_tanggal = "SELECT tanggal FROM data_bayar ORDER BY tanggal DESC LIMIT 1";
            $result_tanggal = mysqli_query($koneksi, $query_tanggal);

            if (!$result_tanggal) {
              die("Query error: " . mysqli_error($koneksi));
            }

            $row_tanggal = mysqli_fetch_assoc($result_tanggal);
            $tanggal = $row_tanggal['tanggal'];

        
            $query = "SELECT SUM(bayar - kembalian) AS total_income 
                       FROM data_bayar 
                       WHERE tanggal = '$tanggal'";
            $result = mysqli_query($koneksi, $query);

            if (!$result) {
              die("Query error: " . mysqli_error($koneksi));
            }

            $row = mysqli_fetch_assoc($result);
            $total_income = $row['total_income'];

            ?>
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                                            class="set-doller">Rp. <?php echo number_format($total_income, 0, ',', '.'); ?></h2>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Income Perhari
                                    </h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
              include 'koneksi.php';


              $query = "SELECT SUM(bayar - kembalian) AS total_pengurangan FROM data_bayar";
              $result = mysqli_query($koneksi, $query);

              if (!$result) {
                die("Query error: " . mysqli_error($koneksi));
              }


              $row = mysqli_fetch_assoc($result);
              $total_pengurangan = $row['total_pengurangan'];



              $koneksi->close();
              ?>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                                            class="set-doller">Rp. <?php echo number_format($total_pengurangan, 0, ',', '.'); ?></h2>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total Pendapatan</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
            
            
        </div>
        
    </div>
    
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="assets/extra-libs/c3/d3.min.js"></script>
    <script src="assets/extra-libs/c3/c3.min.js"></script>
    <script src="assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="dist/js/pages/dashboards/dashboard1.min.js"></script>
</body>

</html>