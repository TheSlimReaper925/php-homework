<?php
	
	require_once("db.php");

	$order="SELECT * FROM `products_table` WHERE 1";
	$result = $conn->query($order);
	// var_dump($result);
	while ($row=$result->fetch_assoc()){
		echo $row["product_name"] . " " . $row["description"] . "<br>";
	}

?>