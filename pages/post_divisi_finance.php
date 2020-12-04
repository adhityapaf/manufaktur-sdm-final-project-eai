<?php

$tanggal = date("Y-m-d");
include('../config/db.php');
$total_gaji = 0;
$tanggal_awal = date("Ymd");
$tanggal_akhir = date("Ymt");
$sql = "SELECT `id_waktu_penggajian`, tb_karyawan.nama, tb_penggajian.jumlah_gaji, `waktu_penggajian` FROM ((tb_waktu_penggajian INNER JOIN tb_karyawan ON tb_waktu_penggajian.id_karyawan = tb_karyawan.id_karyawan) INNER JOIN tb_penggajian ON tb_waktu_penggajian.id_penggajian = tb_penggajian.id_penggajian) WHERE CAST(waktu_penggajian as date) BETWEEN '$tanggal_awal' and '$tanggal_akhir'";
$query = mysqli_query($con, $sql);
while ($d = mysqli_fetch_assoc($query)) {
 $total_gaji += $d['jumlah_gaji'];
}
$keterangan = "Bayar Gaji Karyawan pada bulan ".date('F');
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://manufaktur-finance.my.id/rest-server/api/transaksi?token=user_api123',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('jenis_transaksi' => 'Pengeluaran','divisi' => '1','tanggal' => $tanggal,'biaya' => $total_gaji,'keterangan' => $keterangan,'token' => 'user_api123'),
));

$response = curl_exec($curl);

curl_close($curl);
echo "<script>alert('Status : $response');window.location.href='daftar_waktu_penggajian.php'</script>";

?>