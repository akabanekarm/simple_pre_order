<?php
	$data = file_get_contents('pending_order.json');

	$data = json_decode($data);

	unset($data);

	$data = json_encode($data, JSON_PRETTY_PRINT);
	file_put_contents('pending_order.json', $data);

	header('location: index.php');
 ?>