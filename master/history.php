<?php
// Allow requests from specific origin (replace with your Vue.js app's origin)
header("Access-Control-Allow-Origin: http://localhost:5176");

// Allow specific methods (GET, POST, PUT, DELETE)
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");

// Allow specific headers
header("Access-Control-Allow-Headers: Content-Type");

// Handle preflight requests (OPTIONS method)
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type");
    exit(0);
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "healify";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from database
$sql = "SELECT id_kategori FROM dttransaksi";
$result = $conn->query($sql);

$transactions = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $transactions[] = $row;
    }
} else {
    // Handle case where no results are found
    $transactions = array(); // Ensure it's an empty array or handle differently as needed
}

// Close connection
$conn->close();

// Output data as JSON
header('Content-Type: application/json');
echo json_encode($transactions);
?>
