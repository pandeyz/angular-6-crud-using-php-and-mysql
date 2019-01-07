<?php
/**
 * Store the car
 */
require 'connect.php';

$rawData = file_get_contents("php://input");
$car = json_decode($rawData, true);

$qry = "INSERT INTO cars (model, price) VALUES('". mysqli_escape_string($con, $car['data']['model']) ."', ". mysqli_escape_string($con, $car['data']['price']) .")";

if($result = mysqli_query($con,$qry))
{
  	echo json_encode($car);
}
else
{
  	http_response_code(404);
}