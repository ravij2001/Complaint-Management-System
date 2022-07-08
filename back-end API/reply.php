<?php 

$connect = new PDO("mysql:host=localhost; dbname=cms", "root", "");

$received_data = json_decode(file_get_contents("php://input"));

$data = array();

	$result = "INSERT INTO messages(message_from,ticket_ID,admin_ID,user_ID,messages)
	VALUES ('1','$received_data->token','1','$received_data->userID','$received_data->message')";
	
	
$statement = $connect->prepare($result);
$statement->execute();

while($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	$data[] = $row;
}

echo json_encode($data);
?>