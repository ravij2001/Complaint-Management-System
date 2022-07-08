<?php 

$connect = new PDO("mysql:host=localhost; dbname=cms", "root", "");

$received_data = json_decode(file_get_contents("php://input"));

$data = array();

	$add = "INSERT INTO messages(message_from,ticket_ID,admin_ID,user_ID,messages)
	VALUES ('0','$received_data->token','1','$received_data->userID','$received_data->message')";
	
	$result = "SELECT messages, Date
	FROM messages
	ORDER BY Date DESC LIMIT 1";

$statement1 = $connect->prepare($add);
$statement1->execute();

$statement2 = $connect->prepare($result);
$statement2->execute();



while($row = $statement2->fetch(PDO::FETCH_ASSOC))
{
	$data[] = $row;
}

echo json_encode($data);
?>