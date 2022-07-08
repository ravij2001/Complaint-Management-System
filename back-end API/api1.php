<?php 

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

$conn = mysqli_connect('localhost', 'root', '', 'cms');
if(mysqli_connect_errno())
{
    echo "failed to connect to mysql:" . mysqli_connect_error();
}
else{
    echo "database connected successfully\n";
}

$data = json_decode(file_get_contents('php://input'),true);
$response['error'] = false;


$email = $data['email'];
$mobile = $data['mobile'];
$name = $data['name'];
$message = $data['message'];

$sql = "INSERT INTO user (name,mobile,email) VALUES ('$name','$mobile','$email')";

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  echo "New record created successfully. Last inserted ID is: " . $last_id . "\n";

$insertQueryTicket = $conn->query("INSERT INTO ticket(user_ID,ticket_status)
VALUES ('$last_id','OPEN')");

$ticket_id = $conn->insert_id;
$insertQueryMessage = $conn->query("INSERT INTO messages(message_from,ticket_ID,admin_ID,user_ID,messages)
VALUES ('0','$ticket_id','1','$last_id','$message')");

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('content-type: application/json');
echo json_encode($data);
die();
?>
