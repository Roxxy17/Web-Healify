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

    if (!isset($postData['email']) || !isset($postData['password'])) {
        $response['status'] = 'error';
        $response['message'] = 'Email dan password diperlukan';
        echo json_encode($response);
        exit();
    }

    $email = filter_var($postData['email'], FILTER_SANITIZE_EMAIL);
    $password = $postData['password'];

    // Query untuk mencari pengguna berdasarkan email
    $sql = "SELECT * FROM dtuser WHERE email = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        $response['status'] = 'error';
        $response['message'] = 'Database query failed: ' . $conn->error;
        echo json_encode($response);
        exit();
    }

    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verifikasi password
        if (password_verify($password, $user['password'])) {
            // Start session
            session_start();
            $_SESSION['user'] = array(
                'id_user' => $user['id_user'],
                'nama_user' => $user['nama_user'],
                'email' => $user['email']
            );

            // Generate token sederhana
            $token = generateToken($user['id_user']);

            $response['status'] = 'success';
            $response['message'] = 'Login berhasil';
            $response['token'] = $token;
            $response['user'] = $_SESSION['user'];

            // Menyimpan data ke localStorage
            $response['localStorageData'] = array(
                'id_user' => $user['id_user'],
                'nama_user' => $user['nama_user'],
                'email' => $user['email']
            );
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Password salah';
        }
    } else {
        $response['status'] = 'error';
        $response['message'] = 'User tidak ditemukan';
    }

    $stmt->close();
} else {
    $response['status'] = 'error';
    $response['message'] = 'Metode permintaan tidak valid';
}

echo json_encode($response);

// Fungsi untuk menghasilkan token sederhana
function generateToken($userId)
{
    return base64_encode($userId . ':' . uniqid());
}
?>
