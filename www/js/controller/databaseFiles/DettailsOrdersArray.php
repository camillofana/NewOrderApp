<?php
// Including database connections
require_once 'database_connections.php';
//$orderid = $_POST['parameter'];
$data = json_decode(file_get_contents("php://input"));
$query="SELECT * from `orders` where `ID`=$data->ID";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$Odetail = $row['Details'];
//RICONVERTE STRINGA IN ARRAY
$orderDetail = unserialize($Odetail);					
$arr = array();
//Variabile per settare l'arrey number
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
              //indice di incremento
              $y=1;
              //incremento con somma di $x
              $x=$x+$y;
              }     
					}
			endforeach;
endif;
// Return json array containing data from the databasecon
echo $json_info = json_encode($arr);
?>