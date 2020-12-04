<?php
include('../config/db.php');

if(isset($_POST['login'])){
   $email = $_POST['email'];
   $password = $_POST['password'];
   if($email == "admin" && $password == "admin"){
    echo "<script>alert('Halo admin!'); window.location.href='data_karyawan.php'</script>";
   } elseif ($email == "" && $password == "") {
    echo "<script>alert('Anda tida memasukan email maupun password'); window.location.href='login.php'</script>";
   }
     else {
    session_start();
    $sql = "SELECT * FROM `tb_karyawan` WHERE email = '$email' AND password = '$password'";
    $query = mysqli_query($con, $sql);
    $check = mysqli_num_rows($query);
    $row = mysqli_fetch_all($query, MYSQLI_ASSOC);
    if ($check > 0){
        $_SESSION['id'] = $row[0]['id_karyawan'];
        echo "<script>alert('Yeay Berhasil Login!'); window.location.href='home.php'</script>";
    }
    else {
        echo "<script>alert('Anda Gagal Login :('); window.location.href='login.php'</script>";
    }
 }
}
?>