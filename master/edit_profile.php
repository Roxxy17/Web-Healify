<?php
require_once('config.php');

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

$response = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mendapatkan data POST
    $postData = json_decode(file_get_contents("php://input"), true);

    // Check if required fields are provided
    if (!isset($postData['nama_user']) || !isset($postData['email']) || !isset($postData['password'])) {
        $response['status'] = 'error';
        $response['message'] = 'Nama, email, dan password diperlukan';
        echo json_encode($response);
        exit();
    }

    // Update profile in database (example query)
    $nama_user = $postData['nama_user'];
    $email = filter_var($postData['email'], FILTER_SANITIZE_EMAIL);
    $password = password_hash($postData['password'], PASSWORD_DEFAULT); // Hash password, if needed

    // Example query to update user profile
    $sql = "UPDATE dtuser SET nama_user = ?, email = ?, password = ? WHERE id_user = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        $response['status'] = 'error';
        $response['message'] = 'Database query failed: ' . $conn->error;
        echo json_encode($response);
        exit();
    }

    // Bind parameters and execute query
    $stmt->bind_param('sssi', $nama_user, $email, $password, $_SESSION['user']['id_user']);
    if ($stmt->execute()) {
        $response['status'] = 'success';
        $response['message'] = 'Profile updated successfully';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Failed to update profile';
    }

    $stmt->close();
} else {
    $response['status'] = 'error';
    $response['message'] = 'Metode permintaan tidak valid';
}

echo json_encode($response);
?>
