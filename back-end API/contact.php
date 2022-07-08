<?php 

$connect = new PDO("mysql:host=localhost; dbname=cms", "root", "");

$received_data = json_decode(file_get_contents("php://input"));

$data = array();

	$result = "INSERT INTO contact(name,email,subject,message)
	VALUES ('$received_data->name','$received_data->email','$received_data->subject','$received_data->message')";
	
	
$statement = $connect->prepare($result);
$statement->execute();

while($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	$data[] = $row;
}

echo json_encode($data);
?>