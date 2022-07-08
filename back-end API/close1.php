<?php 

$connect = new PDO("mysql:host=localhost; dbname=cms", "root", "");

$received_data = json_decode(file_get_contents("php://input"));

$data = array();

	$result = "SELECT ticket_status FROM ticket WHERE ticket_ID='$received_data->token'";
	$statement = $connect->prepare($result);
	$statement->execute();

while($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	$data[] = $row;
}

echo json_encode($data);
?>