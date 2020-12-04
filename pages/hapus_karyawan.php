<?php
include('../config/db.php');
    $id=$_GET["id"];
    mysqli_query($con,"DELETE FROM `tb_karyawan` WHERE id_karyawan='$id'");
        echo "<script>alert('Berhasil di Hapus!');window.location.href='data_karyawan.php'</script>";
?>