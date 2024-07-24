<?php
require_once('config.php');

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

$response = array();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Periksa ID pengguna dari parameter query
    $userId = isset($_GET['user_id']) ? (int)$_GET['user_id'] : 0;

    if ($userId <= 0) {
        $response['status'] = 'error';
        $response['message'] = 'User ID is missing or invalid';
        echo json_encode($response);
        exit();
    }

    // Ambil data pengguna dari database
    $sql = "SELECT * FROM dtuser WHERE id_user = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        $response['status'] = 'error';
        $response['message'] = 'Database query failed: ' . $conn->error;
        echo json_encode($response);
        exit();
    }

    $stmt->bind_param('i', $userId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $response['status'] = 'success';
        $response['user'] = array(
            'id_user' => $user['id_user'],
            'nama_user' => $user['nama_user'],
            'email' => $user['email']
            // Tambahkan informasi lain jika perlu
        );
    } else {
        $response['status'] = 'error';
        $response['message'] = 'User not found';
    }

    $stmt->close();
} else {
    $response['status'] = 'error';
    $response['message'] = 'Invalid request method';
}

echo json_encode($response);
?>
