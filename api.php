<?php
//$con = mysqli_connect("localhost", "id15468966_sdm_acc", "TV*%Bh#w>g2sQ}d!","id15468966_sdm","3306");
$con = mysqli_connect("localhost", "root", "","id15468966_sdm");
$response = array();

if ($con){
    $sql = "select * from dummy_tb";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header("Content-Type: JSON");
        $i = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $response[$i]['id'] = $row['id'];
            $response[$i]['name'] = $row['name'];
            $response[$i]['age'] = $row['age'];
            $response[$i]['email'] = $row['email'];
            $i++;
        }
        echo json_encode($response, JSON_PRETTY_PRINT);
    }
} else {
    "Database Gagal Terkoneksi";
}
?>