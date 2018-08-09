<?php 
	require 'db/conn.php';

	$filename = 'pending_order.json';

	$data = file_get_contents($filename);

	$array = json_decode($data , true);

	$format_date = date("Y-m-d");


	//tranfering data to mysql
	foreach ($array as $row) {

		$query =  "INSERT INTO `order`(`order_by`, `deliver_date`, `bread`, `sauce`, `sandwich_type`, `cheese`, `vegies`, `order_date`) VALUES ('".$row["fname"]."' , '".$row["deliver_date"]."' , '".$row["bread"]."' , '".$row["sauce"]."' , '".$row["sandwich_type"]."' , '".$row["cheese"]."' , '".$row["veggies"]."' , '$format_date')" ;

		mysqli_query($con , $query)or die(mysqli_error());
	}


	//mysqli to json
	$mysqli_to_json = "SELECT * FROM `order`";

	$result = mysqli_query($con , $mysqli_to_json)or die(mysqli_error());

	$json_array = file_get_contents('order_list.json');
	$json_array = json_encode($json_array);
	$json_array = array();

	while($row = mysqli_fetch_assoc($result)){
		$json_array[] = $row;
	}

	$json_array = json_encode($json_array , JSON_PRETTY_PRINT);
	file_put_contents('order_list.json', $json_array);

	header("location: index.php");
?>