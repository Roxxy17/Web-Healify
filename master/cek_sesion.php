<?php
session_start();

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type, Authorization");


$response = array(
    'isLoggedIn' => isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] === true,
    'userName' => isset($_SESSION['userName']) ? $_SESSION['userName'] : ''
);

header('Content-Type: application/json');
echo json_encode($response);
?>