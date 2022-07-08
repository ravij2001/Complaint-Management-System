<?php 
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

$conn = new mysqli('localhost', 'root', '', 'cms');
if($conn->connect_error) {
  die('Could not connect to the database');
}
else{
    echo "database connected successfully\n";
}

$data = json_decode(file_get_contents('php://input'),true);
$response['error'] = false;

//  echo '<pre>'.json_encode($data).'</pre>';

 // exit;

$name = $data['name'];
$password = $data['password'];

if ($name = 'kirtan' && $password = '12345') {
  $response['message'] = 'login sucessfully';
}
 else {
  $response['error'] = true;
  $response['message'] = $conn->error;
}
$conn->close();
header('content-type: application/json');
echo json_encode($response);
die();
?>