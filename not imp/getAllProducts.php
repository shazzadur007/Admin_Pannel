<?php
	include 'adminMethod.php';

	$conn=dbconnect();

	if ($conn ) {
		
		$sql="select *from category";
		$result= mysqli_query($conn,$sql);

		$total_rec= mysqli_num_rows($result);

		if ($total_rec==0) {
			
			echo "Sorry No Data Found";
		}else{
			echo"Total Category:  ".$total_rec."<br>";

			while ($row=mysqli_fetch_assoc($result)) {
				echo $row ["id"]." ".$row["Cat_name"]."<br>";
			}
		}

	}else{
		echo "Connection Failed";
	}



?>
