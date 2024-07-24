<?php
session_start();

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
$response = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        $response['status'] = 'error';
        $response['message'] = 'User not logged in';
        echo json_encode($response);
        exit();
    }

    $postData = json_decode(file_get_contents("php://input"), true);
    $name = $postData['name'];
    $email = filter_var($postData['email'], FILTER_SANITIZE_EMAIL);
    $password = $postData['password'];

    // Validate input
    if (empty($name) || empty($email)) {
        $response['status'] = 'error';
        $response['message'] = 'Name and email are required';
        echo json_encode($response);
        exit();
    }

    // Detail koneksi database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "healify";

    $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

    if ($conn->connect_error) {
        $response['status'] = 'error';
        $response['message'] = 'Database connection failed: ' . $conn->connect_error;
        echo json_encode($response);
        exit();
    }

    $userId = $_SESSION['user']['id_user'];
    $sql = "UPDATE dtuser SET nama_user = ?, email = ?, password = ? WHERE id_user = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        $response['status'] = 'error';
        $response['message'] = 'Database query failed: ' . $conn->error;
        echo json_encode($response);
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $stmt->bind_param('sssi', $name, $email, $hashedPassword, $userId);
    if ($stmt->execute()) {
        $_SESSION['user']['nama_user'] = $name;
        $_SESSION['user']['email'] = $email;
        $response['status'] = 'success';
        $response['message'] = 'Profile updated successfully';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Failed to update profile: ' . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    $response['status'] = 'error';
    $response['message'] = 'Invalid request method';
}

echo json_encode($response);
