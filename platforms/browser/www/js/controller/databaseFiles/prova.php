<?php
// Including database connections
require_once 'database_connections.php';
//$orderid = $_POST['parameter'];

$query="SELECT * from `orders` where `ID`=1";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$Odetail = $row['Details'];
$Onumber = $row['OrderNumber'];
//RICONVERTE STRINGA IN ARRAY
$orderDetail = unserialize($Odetail);					
$arr = array();
 $x=0;
if (count($orderDetail) > 0):
			foreach ($orderDetail as $row): array_map('htmlentities', $row);
            $ammount = next($row);
					$sql2 = "SELECT `name`, `unit` FROM `products` WHERE `id` = $row[P]";
					$result2 = mysqli_query($con,$sql2);
					if(mysqli_num_rows($result2) != 0) {
							while($row2 = mysqli_fetch_assoc($result2)) {
							$arr[] = $row2;

                	$arr[$x]['ammount'] = $ammount;
                  
                  $y=1;
                   $x=$x+$y;
                  }
                 
							}
					
		endforeach;
$arrd['ONumber'] = $Onumber;
endif;
// Return json array containing data from the databasecon
print_r ($arr);
print_r ($arrd);