<?php
include('../config/db.php');
session_start();
$id = $_SESSION['id'];
 //covert local time
 date_default_timezone_set("Asia/Jakarta");
 $waktu_kedatangan = date('Y-m-d H:i:s');

 //insert data to database
 $sql = mysqli_query($con, "INSERT INTO tb_presensi(id_karyawan, waktu_kedatangan, waktu_kepergian) VALUES('$id', '$waktu_kedatangan', NULL)");
 if($sql){
    echo "<script>alert('Kamu berhasil absen!'); window.location.href='home.php'</script>";

 } else {
    echo "<script>alert('Yah kamu gagal absen'); window.location.href='home.php'</script>";

 }
?>