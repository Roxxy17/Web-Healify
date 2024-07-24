<?php
require_once('config.php');

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

$response = array();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Periksa token dari header Authorization
    $headers = apache_request_headers();
    $token = isset($headers['Authorization']) ? trim(str_replace('Bearer ', '', $headers['Authorization'])) : '';

    error_log("Headers: " . json_encode($headers)); // Log headers for debugging
    error_log("Token received: " . $token); // Log the token received

    if (empty($token)) {
        $response['status'] = 'error';
        $response['message'] = 'Authorization token is missing';
        echo json_encode($response);
        exit();
    }

    // Validasi token
    $userId = validateToken($token);
    error_log("User ID extracted: " . $userId);

    if (!$userId) {
        $response['status'] = 'error';
        $response['message'] = 'Invalid or expired token';
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
        );
    } else {
        error_log("User not found for user ID: " . $userId);
        $response['status'] = 'error';
        $response['message'] = 'User not found';
    }

    $stmt->close();
} else {
    $response['status'] = 'error';
    $response['message'] = 'Invalid request method';
}

echo json_encode($response);

// Fungsi untuk validasi token sederhana
function validateToken($token) {
    // Contoh validasi sederhana, Anda harus mengimplementasikan yang lebih kuat di produksi
    $decodedToken = base64_decode($token);
    error_log("Decoded token: " . $decodedToken); // Log the decoded token for debugging
    $tokenParts = explode(':', $decodedToken);
    if (count($tokenParts) === 2) {
        return (int) $tokenParts[0];
    } else {
        return false;
    }
}
?>
