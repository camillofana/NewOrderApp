<?php
// Including database connections
require_once 'database_connections.php';
// mysqli query to fetch all data from database
$query = "SELECT
		`orders`.`ID`,
		`orders`.`OrderNumber`,
		`orders`.`DateCreation`,
		`orders`.`DateSent`,
		`orders`.`Details`,
		`orders`.`Comment`,
		`supliers`.`name`,
    `users`.`user_name`,
    `u`.`user_name` as `sender`
		FROM `orders`
		INNER JOIN `supliers`
		ON `orders`.`ProviderID`=`supliers`.`id`
		INNER JOIN `users`
		ON `orders`.`UserCreationID`=`users`.`user_id` 
    LEFT JOIN `users` as `u`
		ON `orders`.`UserSentID`=`u`.`user_id`
		ORDER By id DESC";
$result = mysqli_query($con, $query);
$arr = array();
if(mysqli_num_rows($result) != 0) {
while($row = mysqli_fetch_assoc($result)) {
$arr[] = $row;
}
}
// Return json array containing data from the databasecon
echo $json_info = json_encode($arr);
?>