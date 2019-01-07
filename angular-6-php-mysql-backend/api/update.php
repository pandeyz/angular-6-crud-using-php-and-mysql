<?php
/**
 * Store the car
 */
require 'connect.php';

$rawData = file_get_contents("php://input");
$car = json_decode($rawData, true);

$qry = "UPDATE cars SET MODEL = '" . mysqli_escape_string($con, $car['data']['model']) . "', price = " . mysqli_escape_string($con, $car['data']['price']) . " WHERE id = " . mysqli_escape_string($con, $car['data']['id']);

if($result = mysqli_query($con,$qry))
{
  	echo json_encode($car);
}
else
{
  	http_response_code(404);
}