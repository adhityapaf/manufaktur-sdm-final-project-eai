<?php
include('../config/db.php');
if(isset($_POST['insert'])){
    $insertNama = $_POST['name'];
    $insertTtl = $_POST['tanggal_lahir'];
    $insertJk = $_POST['jenis_kelamin'];
    $insertEmail = $_POST['email'];
    $insertPass = $_POST['password'];
    $insertJabatan = $_POST['id_jabatan'];
    $insertDivisi = $_POST['id_divisi'];

    $sql = "INSERT INTO `tb_karyawan` (nama, jenis_kelamin, tanggal_lahir, email, password, id_jabatan, id_divisi) VALUES ('$insertNama', '$insertJk', '$insertTtl', '$insertEmail', '$insertPass', '$insertJabatan', '$insertDivisi')";
    $query = mysqli_query($con, $sql);
    echo "<script>alert('Data Karyawan $insertNama Berhasil di tambah!'); window.location.href='data_karyawan.php'</script>";
}
?>