<?php
session_start();

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header('Content-Type: application/json');

// Destroy the session
session_destroy();

// Clear the token cookie if you're using cookies to store the token
if (isset($_COOKIE['token'])) {
    setcookie('token', '', time() - 3600, '/'); // Expire the cookie
}

$response = array(
    'status' => 'success',
    'message' => 'Logout successful'
);

echo json_encode($response);
?>
