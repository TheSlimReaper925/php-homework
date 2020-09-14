<?php
	
	require_once("db.php");

	if (isset($_POST["name"],$_POST["description"])) {
		
		$name=mysqli_real_escape_string($conn,$_POST["name"]);
		$description=mysqli_real_escape_string($conn,$_POST["description"]);
		$order="INSERT INTO `products_table`(`product_name`, `description`) VALUES ('$name', '$description')";
		if ($conn->query($order) === TRUE) {
			echo "success";
		}
		else{
			echo "fail";
		}
	
	}

?>