<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "SiphiweDb";

// Object-oriented connection
$conn = new mysqli($host, $username, $password, $db_name);

// Check connection without outputting HTML
if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error);
    header('Content-Type: application/json');
    http_response_code(500);
    die(json_encode(['success' => false, 'message' => 'Database connection failed']));
}
?>