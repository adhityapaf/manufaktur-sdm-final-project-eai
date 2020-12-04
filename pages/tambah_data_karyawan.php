<?php
include('../config/db.php');
?>
    <!doctype html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Tambah Data Karyawan</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <link href="https://repo.rachmat.id/jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript">
            $.noConflict();
            jQuery(document).ready(function($) {
                $("#datepicker").datepicker({
                    dateFormat: 'yy-mm-dd'
                });
            });
        </script>
    </head>

    <body id="page-top">

        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">SDM
                        Manufaktur Mobil</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="data_karyawan.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Data Karyawan</span></a>
                </li>
                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="daftar_kehadiran.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Daftar Kehadiran</span></a>
                </li>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Daftar Gaji</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Menu Daftar Gaji :</h6>
                            <a class="collapse-item" href="daftar_gaji.php">Daftar Gaji Karyawan</a>
                            <a class="collapse-item" href="daftar_waktu_penggajian.php">Daftar Waktu <br>Penggajian Karyawan</a>
                        </div>
                    </div>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            </ul>
            <!-- End of Sidebar -->
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        <!-- Sidebar Toggle (Topbar) -->
                        <form class="form-inline">
                            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                            </button>
                        </form>
                        <!-- Topbar Search -->
                        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin SDM</span>
                                    <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Settings
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Activity Log
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>

                        </ul>
                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Tambah Data Karyawan</h1>
                        <p class="mb-4">Isikan Data Karyawan Baru pada Form dibawah ini</p>

                        <form method="post" action="insert_karyawan.php">
                            <div class="form-group">
                                <label>Nama Karyawan</label>
                                <input type="text" class="form-control" name="name" placeholder="Nama Lengkap Karyawan">
                            </div>
                            <div class="form-group">
                            <label>Tanggal Lahir</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                    <input id="datepicker" type="text" class="form-control datepicker" name="tanggal_lahir" placeholder="Tekan untuk menambahkan tanggal lahir karyawan">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="jenis_kelamin" id="lakilaki" value="Laki-laki" checked>
                                    <label for="lakilaku" class="form-check-label">Laki-laki</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jenis_kelamin" id="perempuan" class="form-check-input" value="Perempuan">
                                    <label for="perempuan" class="form-check-label">Perempuan</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Email Karyawan">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password untuk Karyawan">
                            </div>
                            <div class="form-group">
                                <label>Divisi</label>
                                <div class="dropdown">
                                <select class="dropdown-item" name="id_divisi" id="divisi">
                                    <option selected>Pilih Divisi</option>
                                    <?php
                                     $sqlDivisi = "SELECT * FROM `tb_divisi`";
                                     $queryDivisi = mysqli_query($con, $sqlDivisi);
                                     while ($dataDivisi = mysqli_fetch_array($queryDivisi)) {

                                    ?>
                                    <option class="dropdown-item" value="<?php echo $dataDivisi['id'] ?>"><?php echo $dataDivisi['nama_divisi']?></option>
                                    <?php
                                     }
                                     ?>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Jabatan</label>
                                <div class="dropdown">
                                <select class="dropdown-item" name="id_jabatan" id="jabatan">
                                    <option selected>Pilih Jabatan</option>
                                    <?php
                                     $sqlJabatan = "SELECT * FROM `tb_jabatan`";
                                     $queryJabatan = mysqli_query($con, $sqlJabatan);
                                     while ($dataJabatan = mysqli_fetch_array($queryJabatan)) {

                                    ?>
                                    <option class="dropdown-item" value="<?php echo $dataJabatan['id'] ?>"><?php echo $dataJabatan['nama_jabatan']?></option>
                                    <?php
                                     }
                                     ?>
                                </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="insert">Tambahkan</button>

                        </form>

                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- end of content wrapper -->
            </div>
        </div>


        <!-- end of page wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <h1></h1>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

    </body>
    </html>