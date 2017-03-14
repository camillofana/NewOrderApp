<?php
// Including database connections
require_once 'database_connections.php';
// Fetching and decoding the inserted data
$data = json_decode(file_get_contents("php://input"));
// Escaping special characters from submitting data & storing in new variables.
$provider = mysqli_real_escape_string($con, $data->provider);
$email = mysqli_real_escape_string($con, $data->email);
$gender = mysqli_real_escape_string($con, $data->gender);
$address = mysqli_real_escape_string($con, $data->address);

// mysqli insert query
$query = "INSERT into product (provider) VALUES ('$provider')";
// Inserting data into database
mysqli_query($con, $query);
echo true;
?>