<?php

include('../config/db.php');

if ($con) {
    if (isset($_POST['name'])) {
        header("Content-Type: JSON");
        $insertNama = $_POST['name'];
        $insertTtl = $_POST['tanggal_lahir'];
        $insertJk = $_POST['jenis_kelamin'];
        $insertEmail = $_POST['email'];
        $insertPass = $_POST['password'];
        $insertJabatan = $_POST['id_jabatan'];
        $insertDivisi = $_POST['id_divisi'];
        $sql = "INSERT INTO `tb_karyawan` (nama, jenis_kelamin, tanggal_lahir, email, password, id_jabatan, id_divisi) VALUES ('$insertNama', '$insertJk', '$insertTtl', '$insertEmail', '$insertPass', '$insertJabatan', '$insertDivisi')";
        $query = mysqli_query($con, $sql);

        if (!$query) {
            http_response_code(200);
            echo json_encode(array('status' => 'FAILED', 'message' => 'Gagal Menambahkan Data Karyawan'));
        } else {
            http_response_code(201);
            echo json_encode(array('status' => 'SUCCESS', 'message' => 'Berhasil Menambahkan Data Karyawan'));
        }
    }
} else {
    echo "Database Gagal Terkoneksi";
}
?>