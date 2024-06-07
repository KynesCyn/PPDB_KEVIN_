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
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>MENU | Daftar Baru</title>
    <!-- Custom CSS -->
    <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <style>
    /* Update body background color to black */
    body {
      background-color: #000;
      color: #fff; /* Update text color to white for better contrast */
    }

    /* Update card background color to a shade of brown */
    .card {
      background-color: #332929;
      border-color: #4d4343;
    }

    /* Update headings and text color to white for better readability */
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p {
      color: #fff;
    }

    /* Optional: Update link color to a lighter shade of brown for hover effect */
    a {
      color: #807369;
      text-decoration: none;
    }

    a:hover {
      color: #a69a85;
    }
  </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
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
                        <a href="../dashboard.php">
                            PPDB
                           
                        </a>
                    </div>
                 
                   
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                        <!-- Notification -->
                       
                        </li>
                        <!-- End Notification -->
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                       
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                       
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="../dashboard.php"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                
                        

                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Menu Admin</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Data Master </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="registrasi.php" class="sidebar-link"><span
                                            class="hide-menu"> Registrasi
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="input_gelombang.php" class="sidebar-link"><span
                                            class="hide-menu"> Gelombang
                                        </span></a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                                    class="hide-menu">Pendaftaran </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="daftar_baru.php" class="sidebar-link"><span
                                            class="hide-menu"> Daftar Baru
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="data_siswa.php" class="sidebar-link"><span
                                            class="hide-menu"> Data Siswa
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="data_kaos.php" class="sidebar-link"><span
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
                                <li class="sidebar-item"><a href="transaksi.php" class="sidebar-link"><span
                                            class="hide-menu"> Transaksi
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="data_pembayaran.php" class="sidebar-link"><span
                                            class="hide-menu"> Data Pembayaran
                                        </span></a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="../logout.php"
                                aria-expanded="false"><i data-feather="sidebar" class="feather-icon"></i><span
                                    class="hide-menu">Log Out
                                </span></a>
                        </li>
                        
                        <li class="list-divider"></li>
                       

                       

                       
                    </ul>
                </nav>
                
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        
        <div class="page-wrapper">
         
            
            <div class="container-fluid">
                
                <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title"> Daftar </h3>
            <nav aria-label="breadcrumb">
              
            </nav>
          </div>

          <?php
          include ('../koneksi.php');
          // Ambil nomor pendaftaran tertinggi dari tabel data_siswa
          $sql = "SELECT MAX(no_pendaftaran) AS max_registration_number FROM data_siswa";
          $result = $koneksi->query($sql);

          if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $last_registration_number = $row["max_registration_number"];

         
            if ($last_registration_number === null) {
              $new_registration_number = "BYR001";
            } else {
             
              $last_number = intval(substr($last_registration_number, 3));
              $next_number = $last_number + 1;
              $new_registration_number = "BYR" . sprintf("%03d", $next_number);
            }
          } else {
           
            echo "Error: " . $koneksi->error;
          }

       



          ?>
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="col-md-12 order-md-1">
                    <h4 class="mb-3">Biodata Siswa</h4>


                    <form class="needs-validation" action="proses/data_baru/proses_tambah.php" method="post">
                      <div class="row">
                        <div class="col-md-2 mb-3">
                          <label for="firstName">No Pendaftaran</label>
                          <input type="text" class="form-control " name="no_pendaftar" id="no_pen" placeholder="" value="<?php echo $new_registration_number; ?>" required="" readonly style="color: black;">

                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>

                        </div>

                        <div class="col-md-5 mb-3">
                          <label for="lastName">Nama Lengkap</label>
                          <input type="text" class="form-control text-black " name="nama_siswa" id="lastName" placeholder="" value="" required="">
                          <input type="hidden" name="tanggal" placeholder="" value="<?php echo date('d-m-Y'); ?>" required="">
                          <div class="invalid-feedback">
                            Valid last name is required.
                          </div>
                        </div>
                        <div class="col-md-5 mb-3">
                          <label for="firstName">Tempat,Tanggal Lahir</label>
                          <input type="text" class="form-control text-black" name="ttl" id="firstName" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>
                        </div>
                      </div>
                      <?php

                      $query = "SELECT * FROM tbl_gel ORDER BY id ASC";
                      $result = mysqli_query($koneksi, $query);

                      if (!$result) {
                        die("query error: " . mysqli_error($koneksi));
                      }
                      ?>

                      <div class="row">
                        <div class="col-md-6 mb-3">
                          <label for="gelombang">Gelombang</label>
                          <select class="custom-select d-block w-100" name="gelombang" id="gelombang" required="">
                            <option value="">Pilih...</option>
                            <?php
                            // Langkah 3: Iterasi hasil query
                            while ($row = mysqli_fetch_assoc($result)) {
                              echo '<option value="' . $row['gelombang'] . '">' . $row['gelombang'] . '</option>';
                            }
                            ?>
                          </select>
                          <div class="invalid-feedback">
                            Silakan pilih gelombang.
                          </div>
                        </div>
                        


                          <div class="col-md-6 mb-3">
                            <label class="" for="">Jenis Kelamin</label>
                            <div class="form-inline">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis" id="inlineRadio1" value="Laki-Laki">
                                <label class="custom-label text-black" for="inlineRadio1">Laki-Laki</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis" id="inlineRadio2" value="Perempuan">
                                <label class="custom-label text-black" for="inlineRadio2">Perempuan</label>
                              </div>
                            </div>
                          </div>

                      

                      </div>
                      <h4 class="col-md-6 mb-3">Agama</h4>

                      <div class="d-block col-md-6 mb-3">
                        <div class="row">
                          <div class="col-4">
                            <div class="cuform-control text-black custom-radio">
                              <input id="credit" name="agama" type="radio" class="cuform-control text-black-input" checked="" required="" value="Islam">
                              <label class="cuform-control text-black-label" for="credit">Islam</label>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="cuform-control text-black custom-radio">
                              <input id="debit" name="agama" type="radio" class="cuform-control text-black-input" required="" value="Kristen">
                              <label class="cuform-control text-black-label" for="debit">Kristen</label>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="cuform-control text-black custom-radio">
                              <input id="paypal" name="agama" type="radio" class="cuform-control text-black-input" required="" value="Katolik">
                              <label class="cuform-control text-black-label" for="paypal">Katolik</label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-4">
                            <div class="cuform-control text-black custom-radio">
                              <input id="paypal" name="agama" type="radio" class="cuform-control text-black-input" required="" value="Hindu">
                              <label class="cuform-control text-black-label" for="paypal">Hindu</label>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="cuform-control text-black custom-radio">
                              <input id="paypal" name="agama" type="radio" class="cuform-control text-black-input" required="" value="Buddha">
                              <label class="cuform-control text-black-label" for="paypal">Buddha</label>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="cuform-control text-black custom-radio">
                              <input id="paypal" name="agama" type="radio" class="cuform-control text-black-input" required="" value="Konghuchu">
                              <label class="cuform-control text-black-label" for="paypal">Konghuchu</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 mb-3">
                          <label for="firstName">No Telepon Siswa</label>
                          <input type="text" class="form-control text-black" name="no_telpSiswa" id="firstName" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="firstName">Asal Sekolah </label>
                          <input type="text" class="form-control text-black" name="asal" id="firstName" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>
                        </div>

                      </div>


                      <div class="mb-3 col-md-14">
                        <label for="address">Alamat Sekolah</label>
                        <textarea class="form-control text-black" id="address" name="alamat_sekolah" placeholder="1234 Main St" required="" cols="30" rows="10"></textarea>
                        <div class="invalid-feedback">
                          Please enter your shipping address.
                        </div>
                      </div>

                      <div class="col-md-14 mb-3">
                        <label for="country">Pilih Jurusan</label>
                        <select class="custom-select d-block w-100" name="jurusan" id="country" required="">
                          <option value="">Pilih...</option>
                          <option>REKAYASA PERANGKAT LUNAK</option>
                          <option>AKUTANSI KEUANGAN DAN LEMBAGA</option>
                          <option>MANANJEMEN PERKANTORAN</option>
                          <option>DESAIN KOMUNIKASI VISUAL</option>
                          <option>PEMASARAN</option>
                        </select>
                        <div class="invalid-feedback">
                          Please select a valid country.
                        </div>
                      </div>

                      <h4 class="mb-3">Biodata Orang Tua</h4>

                      <div class="row">
                        <div class="col-md-6 mb-3">
                          <label for="cc-name">Nama Orang Tua</label>
                          <input type="text" class="form-control text-black" id="cc-name" name="nama_ortu" placeholder="">
                          <small class="text-muted">Full name as displayed on card</small>
                          <div class="invalid-feedback">
                            Name on card is required
                          </div>
                        </div>


                      </div>
                      <div class="row">
                        <div class="mb-3 col-md-6">
                          <label for="address">Alamat Orang Tua</label>
                          <textarea class="form-control text-black" id="address" name="alamat_ortu" placeholder="1234 Main St" cols="50" rows="7"></textarea>
                          <div class="invalid-feedback">
                            Please enter your shipping address.
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              <label for="cc-name">No Telepon</label>
                              <input type="text" class="form-control text-black" name="no_telpOrtu" id="cc-name" placeholder="">
                              <div class="invalid-feedback">
                                Name on card is required
                              </div>
                            </div>
                            <div class="col-md-12 mb-3">
                              <label for="cc-name">Pekerjaan</label>
                              <input type="text" class="form-control text-black" name="pekerjaan_ortu" id="cc-name" placeholder="">
                              <div class="invalid-feedback">
                                Name on card is required
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <h4 class="mb-3">Biodata Wali</h4>

                      <div class="row">
                        <div class="col-md-6 mb-3">
                          <label for="cc-name">Nama Wali</label>
                          <input type="text" class="form-control text-black" id="cc-name" name="nama_wali" placeholder="">
                          <small class="text-muted">Full name as displayed on card</small>
                          <div class="invalid-feedback">
                            Name on card is required
                          </div>
                        </div>


                      </div>
                      <div class="row">
                        <div class="mb-3 col-md-6">
                          <label for="address">Alamat Wali</label>
                          <textarea class="form-control text-black" id="address" name="alamat_wali" placeholder="1234 Main St" cols="50" rows="7"></textarea>
                          <div class="invalid-feedback">
                            Please enter your shipping address.
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              <label for="cc-name">No Telepon</label>
                              <input type="text" class="form-control text-black" name="no_telpWali" id="cc-name" placeholder="">
                              <div class="invalid-feedback">
                                Name on card is required
                              </div>
                            </div>
                            <div class="col-md-12 mb-3">
                              <label for="cc-name">Pekerjaan</label>
                              <input type="text" class="form-control text-black" name="pekerjaan_wali" id="cc-name" placeholder="">
                              <div class="invalid-feedback">
                                Name on card is required
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <button class="btn btn-primary btn-lg btn-block" type="submit">Simpan Data</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- TUTUP NAVBAR ISI -->


            <!-- partial:../../partials/_footer.html -->

            <!-- FOOTER -->
            <footer class="footer">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
              
            </footer>
            <!-- TUTUP FOOTER -->


            <!-- partial -->
          </div>
        </div>
               
            </div>
            
            <footer class="footer text-center text-muted">
              
            </footer>
           
        </div>
        
    </div>
    
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="../dist/js/app-style-switcher.js"></script>
    <script src="../dist/js/feather.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="../assets/extra-libs/c3/d3.min.js"></script>
    <script src="../assets/extra-libs/c3/c3.min.js"></script>
    <script src="../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../dist/js/pages/dashboards/dashboard1.min.js"></script>
   
</body>

</html>