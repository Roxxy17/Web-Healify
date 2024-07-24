<?php
include_once 'config.php';


$sql = "SELECT id_kategori, metode, deskripsi, durasi, sesi, harga FROM dtkategori";
$result = $conn->query($sql);

$packages = array();

if ($result->num_rows > 0) {
    // Output data setiap baris
    while($row = $result->fetch_assoc()) {
        $packages[] = $row;
    }
} else {
    echo json_encode(array("message" => "0 results"));
}

$conn->close();

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
echo json_encode($packages);
?>