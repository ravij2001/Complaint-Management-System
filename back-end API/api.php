<?php 
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

$conn = new mysqli('localhost', 'root', '', 'cms');
if($conn->connect_error) {
  die('Could not connect to the database');
}

$data = json_decode(file_get_contents('php://input'),true);

$response['error'] = false;

$email = $data['email'];

$insertQuery = $conn->query("SELECT * FROM user WHERE email = '$email'");

if (!$insertQuery) {
  echo json_encode($data);
}

$conn->close();
header('content-type: application/json');
die();
?>

