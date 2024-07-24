<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

include_once 'config.php';

$input = file_get_contents("php://input");
$data = json_decode($input, true);

$id_user = 32; // ID pengguna dari Vue.js
$id_dokter = $data['doctorId']; // ID dokter yang dipilih dari Vue.js
$mtdpembayaran = $data['paymentMethod']; // Metode pembayaran dari Vue.js
$id_kategori = $data['packageId']; // ID paket yang dipilih dari Vue.js





$sql = "INSERT INTO dttransaksi (id_user, id_dokter, mtdpembayaran, id_kategori) 
        VALUES ('$id_user', '$id_dokter', '$mtdpembayaran', '$id_kategori')";

if ($conn->query($sql) === TRUE) {
    // Jika penyisipan berhasil
    $response = array("message" => "Data transaksi berhasil disimpan.");
    echo json_encode($response);
} else {
    // Jika terjadi kesalahan
    $response = array("error" => "Error: " . $sql . "<br>" . $conn->error);
    echo json_encode($response);
}

$conn->close();
?>