<?php
include('../config/db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register Akun Karyawan</title>

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

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun Karyawan!</h1>
                            </div>
                            <form class="user" method="POST" action="register_karyawan.php">
                                <div class="form-group row">
                                    <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group row">
                                    <div class="form-group col-sm-6">
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
                                    <div class="form-group col-sm-6">
                                        <label>Tanggal Lahir</label>
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                            <input id="datepicker" type="text" class="form-control datepicker" name="tanggal_lahir" placeholder="YYYY-MM-DD">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="form-group col-sm-6">
                                        <label>Divisi</label>
                                        <div class="dropdown">
                                            <select class="dropdown-item" name="id_divisi" id="divisi">
                                                <option selected>Pilih Divisi</option>
                                                <?php
                                                $sqlDivisi = "SELECT * FROM `tb_divisi`";
                                                $queryDivisi = mysqli_query($con, $sqlDivisi);
                                                while ($dataDivisi = mysqli_fetch_array($queryDivisi)) {

                                                ?>
                                                    <option class="dropdown-item" value="<?php echo $dataDivisi['id'] ?>"><?php echo $dataDivisi['nama_divisi'] ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Jabatan</label>
                                        <div class="dropdown">
                                            <select class="dropdown-item" name="id_jabatan" id="jabatan">
                                                <option selected>Pilih Jabatan</option>
                                                <?php
                                                $sqlJabatan = "SELECT * FROM `tb_jabatan`";
                                                $queryJabatan = mysqli_query($con, $sqlJabatan);
                                                while ($dataJabatan = mysqli_fetch_array($queryJabatan)) {

                                                ?>
                                                    <option class="dropdown-item" value="<?php echo $dataJabatan['id'] ?>"><?php echo $dataJabatan['nama_jabatan'] ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Alamat Email">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="passwordconfirm" name="passwordconfirm" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block" name="create_user">Registrasi</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="login.php">Sudah punya akun? Yuk Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>