<?php

$con = mysqli_connect("localhost", "id15468966_sdm_acc", "TV*%Bh#w>g2sQ}d!","id15468966_sdm","3306");

if ($con) {
    if (isset($_POST['id_karyawan'])) {
        header("Content-Type: JSON");

        //get id karyawan from body
        $id_karyawan = $_POST['id_karyawan'];

        //covert local time
        date_default_timezone_set("Asia/Jakarta");
        $waktu_kedatangan = date('Y-m-d H:i:s');

        //insert data to database
        $sql = mysqli_query($con, "INSERT INTO tb_presensi(id_karyawan, waktu_kedatangan) VALUES('$id_karyawan', '$waktu_kedatangan')");
        if (!$sql) {
            echo json_encode(array('status' => 'FAILED', 'message' => 'Gagal Menambahkan Data'));
        } else {
            echo json_encode(array('status' => 'SUCCESS', 'message' => 'Berhasil Menambahkan Data'));
        }
    }
} else {
    echo "Database Gagal Terkoneksi";
}


