<?php
header("Access-Control-Allow-Origin: http://localhost:5176");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "healify";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        $sql = "SELECT * FROM jurnal";
        $result = $conn->query($sql);

        $jurnals = [];
        while ($row = $result->fetch_assoc()) {
            $jurnals[] = $row;
        }

        echo json_encode($jurnals);
        break;

    case 'POST':
        $data = json_decode(file_get_contents('php://input'), true);
        $juduljurnal = $data['juduljurnal'];
        $tanggaljurnal = $data['tanggaljurnal'];
        $deskripsijurnal = $data['deskripsijurnal'];

        $sql = "INSERT INTO jurnal (juduljurnal, tanggaljurnal, deskripsijurnal) VALUES ('$juduljurnal', '$tanggaljurnal', '$deskripsijurnal')";
        $conn->query($sql);
        break;

    case 'PUT':
        $data = json_decode(file_get_contents('php://input'), true);
        $id = $data['id'];
        $juduljurnal = $data['juduljurnal'];
        $tanggaljurnal = $data['tanggaljurnal'];
        $deskripsijurnal = $data['deskripsijurnal'];

        $sql = "UPDATE jurnal SET juduljurnal='$juduljurnal', tanggaljurnal='$tanggaljurnal', deskripsijurnal='$deskripsijurnal' WHERE id=$id";
        $conn->query($sql);
        break;

    case 'DELETE':
        $data = json_decode(file_get_contents('php://input'), true);
        $id = $data['id'];

        $sql = "DELETE FROM jurnal WHERE id=$id";
        $conn->query($sql);
        break;
}

$conn->close();
?>