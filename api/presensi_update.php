<?php

include('../config/db.php');

if ($con) {
    if (isset($_POST['id_presensi'])) {
        header("Content-Type: JSON");

        //covert local time
        date_default_timezone_set("Asia/Jakarta");

        //get parameter id_presesnsi from url
        $id = $_POST['id_presensi'];

        //get data presensi user
        $result = mysqli_query($con, "SELECT * FROM tb_presensi where id_presensi = '$id'");
        $id_karyawans = "";
        $waktu_kedatangans = "";
        while ($rst = mysqli_fetch_array($result)) {
            $id_karyawans = $rst['id_karyawan'];
            $waktu_kedatangans = $rst['waktu_kedatangan'];
        }
        $id_karyawan = $id_karyawans;
        $waktu_kedatangan = $waktu_kedatangans;
        $waktu_kepergian = date('Y-m-d H:i:s');

        //update data presensi user
        // $sql = mysqli_query($con, "UPDATE tb_presensi SET id_karyawan = '$id_karyawan', waktu_kedatangan = '$waktu_kedatangan', waktu_kepergian = '$waktu_kepergian' where id_presensi = '$id'")
        $query = "UPDATE `tb_presensi` SET `waktu_kepergian` = '$waktu_kepergian' WHERE `id_presensi` = '$id'";
        $sql = mysqli_query($con, $query);
        if (!$sql) {
            echo json_encode(array('status' => 'FAILED', 'message' => 'Gagal Update Data'));
        } else {
            echo json_encode(array('status' => 'SUCCESS', 'message' => 'Berhasil Update Data'));
        }
    }
} else {
    echo "Database Gagal Terkoneksi";
}


