<?php
include('../config/db.php');
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $updateNama = $_POST['name'];
    $updateTtl = $_POST['tanggal_lahir'];
    $updateJk = $_POST['jenis_kelamin'];
    $updateEmail = $_POST['email'];
    $updatePass = $_POST['password'];
    $update_jabatan = $_POST['id_jabatan'];
    $update_divisi = $_POST['id_divisi'];

    $sql = "UPDATE `tb_karyawan` SET `nama`='$updateNama', `jenis_kelamin` = '$updateJk',`tanggal_lahir` = '$updateTtl',`email` = '$updateEmail',`password` = '$updatePass',`id_jabatan` = '$update_jabatan',
    `id_divisi` = '$update_divisi' WHERE `id_karyawan`='$id'";
    $query = mysqli_query($con, $sql);
    echo "<script>alert('Data Karyawan $updateNama Berhasil di rubah!'); window.location.href='data_karyawan.php'</script>";
}
?>