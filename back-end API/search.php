<?php 

$connect = new PDO("mysql:host=localhost; dbname=cms", "root", "");

$received_data = json_decode(file_get_contents("php://input"));

$data = array();

$result = "SELECT user.name ,user.mobile ,
user.email ,ticket.ticket_status ,ticket.ticket_ID ,ticket.user_ID
FROM user ,ticket
WHERE user.user_ID = ticket.user_ID  AND email LIKE '%".$received_data->query."%'";


$statement = $connect->prepare($result);

$statement->execute();

while($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	$data[] = $row;
}
echo json_encode($data);

?>