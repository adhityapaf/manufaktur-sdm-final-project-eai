<?php
    header("Content-Type: application/json");
    $response = array();
    if (isset($_GET['divisi']) && $_GET['divisi']!="") {
        $divisi = $_GET['divisi'];
        $query = "SELECT `id_karyawan`,`nama`,`jenis_kelamin`,`tanggal_lahir`,`email`, tb_jabatan.nama_jabatan, tb_divisi.nama_divisi FROM ((tb_karyawan INNER JOIN tb_jabatan ON tb_karyawan.id_jabatan = tb_jabatan.id) INNER JOIN tb_divisi ON tb_karyawan.id_divisi = tb_divisi.id) WHERE tb_divisi.nama_divisi = '$divisi'";
        response_func($divisi, $query);
    } else {
        $divisi = "";
        $query = "SELECT `id_karyawan`,`nama`,`jenis_kelamin`,`tanggal_lahir`,`email`, tb_jabatan.nama_jabatan, tb_divisi.nama_divisi FROM ((tb_karyawan INNER JOIN tb_jabatan ON tb_karyawan.id_jabatan = tb_jabatan.id) INNER JOIN tb_divisi ON tb_karyawan.id_divisi = tb_divisi.id)";
        response_func($divisi, $query);
    }

    function response_func($divisi,$query){
    include('../config/db.php');
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result)>0){
            $response['response_code'] = 200;
            if ($divisi != "") {
            $response['response_desc'] = "Berikut data karyawan pada divisi $divisi"; 
            } else{
            $response['response_desc'] = "Berikut data karyawan pada seluruh divisi";
            }
            $response['response'] = array();
            $data = array();
            
            while ($row = mysqli_fetch_assoc($result)){
                $data['id_karyawan'] = $row['id_karyawan'];
                $data['nama'] = $row['nama'];
                $data['jenis_kelamin'] =  $row['jenis_kelamin'];
                $data['tanggal_lahir'] = $row['tanggal_lahir'];
                $data['email'] = $row['email'];
                $data['jabatan'] = $row['nama_jabatan'];
                if ($divisi == "") {
                    $data['divisi'] = $row['nama_divisi'];

                }
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