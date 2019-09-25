<?php
	include 'adminMethod.php';
	$conn= dbconnect();

	$cat= $_POST['cat'];

	$sql= "INSERT INTO category(id,cat_name) VALUES('','$CAT') ";
	if ($conn) {
		mysqli_query($conn,$sql);
	}
	else{
		echo "Connection Failed";
	}

	

	// $res=addCategory($cat);


?>