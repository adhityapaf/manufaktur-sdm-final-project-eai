<?php
include('../config/db.php');
$id = $_GET['id'];
 //covert local time
 date_default_timezone_set("Asia/Jakarta");
 $waktu_pulang = date('Y-m-d H:i:s');

 //insert data to database
 $query = "UPDATE `tb_presensi` SET `waktu_kepergian` = '$waktu_pulang' WHERE `id_presensi` = '$id'";
 $sql = mysqli_query($con, $query);
 if($query){
    echo "<script>alert('Dadah, jangan lupa absen besok lagi yah!'); window.location.href='home.php'</script>";

 } else {
    echo "<script>alert('Yah kamu gagal absen'); window.location.href='home.php'</script>";

 }
?>