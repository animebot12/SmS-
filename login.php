<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Set your username and password here
$valid_username = "zara";
$valid_password = "zara123";

// Get POST data
$input_username = $_POST['username'] ?? '';
$input_password = $_POST['password'] ?? '';

// Validate credentials
if ($input_username === $valid_username && $input_password === $valid_password) {
    echo json_encode(['success' => true, 'message' => 'Login successful']);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid credentials']);
}
?>
