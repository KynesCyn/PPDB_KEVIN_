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
    <title>MENU | Data Pembayaran</title>
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
                   
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="../dashboard.php">
                            PPDB
                        </a>
                    </div>
                   
                </div>
               
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    
                     
                    
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
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        
  
       
        <div class="page-wrapper">

            <div class="container-fluid">
            <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title"> Data Pembayaran </h3>
            
          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                      <thead style="background-color:yellow;">
                        <tr align="center">
                          <th> No Transaksi </th>
                          <th> Tanggal </th>
                          <th> Nama Siswa </th>
                          <th> Keterangan </th>
                          <th> Action </th>
                          <th> Cetak </th>
                        </tr>
                      </thead>
                      <?php
                        include ('../koneksi.php');
                      $query = "SELECT * FROM data_bayar ORDER BY no_pendaftaran asc";
                      $result = mysqli_query($koneksi, $query);
                      if (!$result) {
                        die("query error: " . mysqli_error($koneksi) . "-" . mysqli_error($koneksi));
                      }

                      $no = 1;
                      while ($row = mysqli_fetch_assoc($result)) {
                        $edit_modal_id = "editModal" . $row['id']; // ID modal yang unik
                      ?>
                        <tbody style="background-color: white;">
                          <td><?php echo $row["no_pendaftaran"]; ?></td>
                          <td><?php echo $row["tanggal"]; ?></td>
                          <td><?php echo $row["nama_siswa"]; ?></td>
                          <td><?php echo $row["keterangan"]; ?></td>
                          <td style="text-align: center;"> <button type="button" class="btn btn-warning  fas fa-edit" data-toggle="modal" style="font-size: 20px;" data-target="#<?php echo $edit_modal_id; ?>"></button></td>
                          <td style="text-align: center;"><button type="button" class="btn btn-primary" onclick="cetak(<?php echo $row['id']; ?>)">Cetak</button></td>
                          <script>
                            function cetak(id) {
                                window.location.href = '../cetak.php?id=' + id;
                                  }
                                    </script>

                          <div class="modal fade" id="<?php echo $edit_modal_id; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form class="needs-validation" action="proses/transaksi/pelunasan.php" method="post">
                                    <div class="row">
                                      <div class="col-md-6 mb-3">
                                        <label for="firstName">No Pendaftaran</label>
                                        <input type="text" class="form-control" style="color: black;" name="no_pendaftaran" id="firstName" placeholder="" value="<?php echo $row['no_pendaftaran']; ?>" required="" readonly>
                                        <div class="invalid-feedback">
                                          Valid first name is required.
                                        </div>
                                      </div>
                                      <div class="col-md-6 mb-3">
                                        <label for="lastName">Tanggal</label>

                                        <input type="text" class="form-control" name="tanggal" style="color: black;" id="lastName" placeholder="" value="<?php echo $row['tanggal']; ?>" required="" readonly>
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                                        <input type="hidden" name="ba" value="<?php echo $row['bayar']; ?>" />
                                        <div class="invalid-feedback">
                                          Valid last name is required.
                                        </div>
                                      </div>
                                      <div class="col-md-6 mb-3">
                                        <label for="firstName">Nama Siswa</label>
                                        <input type="text" class="form-control" style="color: black;" name="nama_siswa" id="firstName" placeholder="" value="<?php echo $row['nama_siswa'] ?>" required="" readonly>
                                        <div class="invalid-feedback">
                                          Valid first name is required.
                                        </div>
                                      </div>


                                      <div class="col-md-6 mb-3">
                                        <label for="nominal">Sisa Pembayaran</label>
                                        <input type="number" class="form-control sisa-pembayaran" id="nominal_<?php echo $row['id']; ?>" style="color: black;" name="nominal" placeholder="" value="" required="" readonly>
                                        <input type="hidden" class="sisa" data-nom="<?php echo $row['jumlah']; ?>" data-pem="<?php echo $row['bayar']; ?>">
                                        <div class="invalid-feedback">
                                          Valid first name is required.
                                        </div>
                                      </div>
                                      <div class="col-md-4 mb-3">
                                        <label for="bayar">Pembayaran</label>
                                        <input type="text" class="form-control bayar" id="bayar_<?php echo $row['id']; ?>" name="bayar" placeholder="" value="" required="">
                                        <div class="invalid-feedback">
                                          <input type="hidden" name="sisaba" id="sisa" value="<?php echo $row['sisa'];?>">
                                          Valid first name is required.
                                        </div>
                                      </div>
                                      <div class="col-md-4 mb-3">
                                        <label for="kembalian">Kembalian</label>
                                        <input type="text" class="form-control kembalian" id="kembalian_<?php echo $row['id']; ?>" name="kembalian" placeholder="" value="<?php echo $row['kembalian'] ?>" required="">
                                        <div class="invalid-feedback">
                                          Valid first name is required.
                                        </div>
                                      </div>
                                      <div class="col-md-4 mb-3">
                                        <label for="firstName">Keterangan</label>
                                        <input type="text" class="form-control keterangan" id="keterangan_<?php echo $row['id']; ?>" name="keterangan" placeholder="" value="<?php echo $row['keterangan'] ?>" required="">
                                        <div class="invalid-feedback">
                                          Valid first name is required.
                                        </div>
                                      </div>


                                      <script>
                                        function hitungSisaPembayaran() {
                                          var sisaElements = document.querySelectorAll(".sisa");

                                          sisaElements.forEach(function(item) {
                                            var nom = parseFloat(item.getAttribute("data-nom"));
                                            var pem = parseFloat(item.getAttribute("data-pem"));

                                            var bali = nom - pem;

                                            if (bali < 0) {
                                              item.parentNode.querySelector(".sisa-pembayaran").value = "";
                                            } else {
                                              item.parentNode.querySelector(".sisa-pembayaran").value = bali.toFixed(2);
                                            }
                                          });
                                        }

                                        function hitungKembalian() {
                                          // Ambil elemen-elemen yang diperlukan
                                          var parent = this.closest('.modal-body');
                                          var sisaPembayaranElement = parent.querySelector(".sisa-pembayaran");
                                          var bayarElement = parent.querySelector(".bayar");
                                          var kembalianElement = parent.querySelector(".kembalian");
                                          var keteranganElement = parent.querySelector(".keterangan");

                                          // Periksa apakah elemen-elemen ditemukan
                                          if (!sisaPembayaranElement || !bayarElement || !kembalianElement || !keteranganElement) {
                                            console.error("One or more elements not found");
                                            return;
                                          }

                                          // Ambil nilai dari input
                                          var total_belanja = parseFloat(sisaPembayaranElement.value);
                                          var pembayaran = parseFloat(bayarElement.value);

                                          // Periksa apakah nilai-nilai valid
                                          if (isNaN(total_belanja) || isNaN(pembayaran)) {
                                            console.error("Invalid input values");
                                            return;
                                          }

                                          // Hitung kembalian
                                          var kembalian = pembayaran - total_belanja;

                                          // Update nilai kembalian dan keterangan
                                          if (kembalian < 0) {
                                            kembalianElement.value = '';
                                            keteranganElement.value = 'Belum Lunas';
                                          } else {
                                            kembalianElement.value = kembalian.toFixed(2);
                                            keteranganElement.value = 'Lunas';
                                          }
                                        }




                                        document.addEventListener("DOMContentLoaded", hitungSisaPembayaran);

                                        document.querySelectorAll('.bayar').forEach(item => {
                                          item.addEventListener('input', hitungKembalian);
                                        });

                                        document.querySelectorAll('.form-control').forEach(item => {
                                          item.addEventListener('input', hitungSisaPembayaran);
                                        });
                                      </script>





                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                      </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                        </tbody>
                      <?php
                        $no++;
                      }
                      ?>

                    </table>
                  </div>

                </div>
              </div>
            </div>
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