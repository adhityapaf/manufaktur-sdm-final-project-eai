<?php
include('../config/db.php');
if(isset($_POST['create_user'])){
    if($_POST['password'] == $_POST['passwordconfirm']){
        $insertNama = $_POST['name'];
        $insertTtl = $_POST['tanggal_lahir'];
        $insertJk = $_POST['jenis_kelamin'];
        $insertEmail = $_POST['email'];
        $insertPass = $_POST['password'];
        $insertJabatan = $_POST['id_jabatan'];
        $insertDivisi = $_POST['id_divisi'];
    
        $sql = "INSERT INTO `tb_karyawan` (nama, jenis_kelamin, tanggal_lahir, email, password, id_jabatan, id_divisi) VALUES ('$insertNama', '$insertJk', '$insertTtl', '$insertEmail', '$insertPass', '$insertJabatan', '$insertDivisi')";
        $query = mysqli_query($con, $sql);
        echo "<script>alert('Akun Karyawan $insertNama Berhasil di buat!'); window.location.href='login.php'</script>";
    } else {
    echo "<script>alert('Password tidak sama'); window.location.href='register.php'</script>";
        
    }
    
}
?>