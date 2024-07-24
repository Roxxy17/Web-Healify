<?php
include_once 'config.php';

$sql = "SELECT id_dokter, nama_dokter, gambar_dokter FROM dtdokter";
$result = $conn->query($sql);

$doctors = array();

if ($result->num_rows > 0) {
    // Output data setiap baris
    while($row = $result->fetch_assoc()) {
        $doctors[] = $row;
    }
} else {
    echo json_encode(array("message" => "0 results"));
}

$conn->close();

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
echo json_encode($doctors);
?>