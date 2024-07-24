<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    http_response_code(200);
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    error_log("Raw POST data: " . file_get_contents("php://input"));

    $data = json_decode(file_get_contents("php://input"), true);

    $nama = $data['nama'] ?? '';
    $email = $data['email'] ?? '';
    $password = $data['password'] ?? '';

    // Log received data
    error_log("Received data: nama=$nama, email=$email, password=$password");

    // Validate form data
    if (empty($nama) || empty($email) || empty($password)) {
        error_log("Validation failed: one or more fields are empty.");
        echo json_encode(['error' => true, 'message' => 'All fields are required.']);
        exit;
    }

    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Log hashed password
    error_log("Hashed password: $hashedPassword");

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "healify";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        echo json_encode(['error' => true, 'message' => 'Connection to database failed: ' . $conn->connect_error]);
        exit;
    }

    // Check if email already exists
    $emailCheckSql = "SELECT * FROM dtuser WHERE email = ?";
    $stmt = $conn->prepare($emailCheckSql);
    if ($stmt === false) {
        echo json_encode(['error' => true, 'message' => 'Database error: ' . $conn->error]);
        exit;
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo json_encode(['error' => true, 'message' => 'Email already exists.']);
        $stmt->close();
        $conn->close();
        exit;
    }

    $stmt->close();

    // Insert data into database
    $sql = "INSERT INTO dtuser (nama_user, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        echo json_encode(['error' => true, 'message' => 'Database error: ' . $conn->error]);
        exit;
    }

    $stmt->bind_param("sss", $nama, $email, $hashedPassword);

    if ($stmt->execute()) {
        echo json_encode(['error' => false, 'message' => 'Registration successful.']);
    } else {
        echo json_encode(['error' => true, 'message' => 'Execute error: ' . $stmt->error]);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(['error' => true, 'message' => 'Method not allowed.']);
}
