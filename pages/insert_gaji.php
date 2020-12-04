<?php
include('../config/db.php');
if(isset($_POST['insert'])){
    $id_karyawan = $_POST['id_karyawan'];
    $jumlahgaji = $_POST['gaji'];
    $sql = "INSERT INTO `tb_penggajian`(`id_karyawan`,`jumlah_gaji`) VALUES ('$id_karyawan','$jumlahgaji')";
    $query = mysqli_query($con, $sql);
    echo "<script>alert('Data Gaji Karyawan Berhasil di tambah!'); window.location.href='daftar_gaji.php'</script>";
}
?>