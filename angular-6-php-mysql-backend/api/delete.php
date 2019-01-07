<?php
/**
 * Store the car
 */
require 'connect.php';

$carId = $_GET['id'];

$qry = "DELETE FROM cars WHERE id = " . mysqli_escape_string($con, $carId);

if($result = mysqli_query($con,$qry))
{
  	echo json_encode($carId);
}
else
{
  	http_response_code(404);
}