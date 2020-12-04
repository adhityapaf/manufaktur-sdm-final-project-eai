<?php
    header("Content-Type: application/json");
    $response = array();
    if (isset($_GET['divisi']) && $_GET['divisi']!="") {
        $divisi = $_GET['divisi'];
        $query = "SELECT `id_presensi`, tb_karyawan.nama, tb_divisi.nama_divisi, `waktu_kedatangan`, `waktu_kepergian` FROM ((tb_presensi INNER JOIN tb_karyawan ON tb_presensi.id_karyawan = tb_karyawan.id_karyawan) INNER JOIN tb_divisi ON tb_karyawan.id_divisi = tb_divisi.id) WHERE tb_divisi.nama_divisi = '$divisi'";
        response_func($divisi, $query);
    } else {
        $divisi = "";
        $query = "SELECT `id_presensi`, tb_karyawan.nama, tb_divisi.nama_divisi, `waktu_kedatangan`, `waktu_kepergian` FROM ((tb_presensi INNER JOIN tb_karyawan ON tb_presensi.id_karyawan = tb_karyawan.id_karyawan) INNER JOIN tb_divisi ON tb_karyawan.id_divisi = tb_divisi.id)";
        response_func($divisi, $query);
    }

    function response_func($divisi,$query){
    include('../config/db.php');
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result)>0){
            $response['response_code'] = 200;
            if ($divisi != "") {
            $response['response_desc'] = "Berikut presensi karyawan pada divisi $divisi"; 
            } else{
            $response['response_desc'] = "Berikut presensi karyawan pada seluruh divisi";
            }
            $response['response'] = array();
            $data = array();
            
            while ($row = mysqli_fetch_assoc($result)){
                $data['id_presensi'] = $row['id_presensi'];
                $data['nama'] = $row['nama'];
                if ($divisi == "") {
                    $data['divisi'] = $row['nama_divisi'];
                }
                $data['waktu_kedatangan'] =  $row['waktu_kedatangan'];
                $data['waktu_kepergian'] = $row['waktu_kepergian'];
                array_push($response['response'], $data);
            }
            $json_response = json_encode($response, JSON_PRETTY_PRINT);
            echo $json_response;
            http_response_code(200);
            mysqli_close($con);
    } else {
        $response['response_code'] = 200;
        $response['response_desc'] = "Tidak ada data.";
        $json_response = json_encode($response);
        echo $json_response;
    }
}
?>