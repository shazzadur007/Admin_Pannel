<?php
	include 'adminMethod.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			
			
			<div class="col-12" style="padding-top: 20px;">
				<h1><marquee behavior="alternate" >Welcome to Admin Pannel</marquee></h1>
			</div>
			
			
		</div>

	<?php
	include('menu.php');
	?>

	<br>


	<div class="row">
		

		<div class="col-5" >
			<h3 class="text-center"> Add new Category</h3><br>

			<form action="" method="POST">

				<table class="table table-striped ">
					
					<!-- <tr>
						<th>Enter Cat ID</th>
						<th ><input type="text" name="Id" placeholder=" Enter category ID " required></th>
					</tr> -->
					<tr>
						<th>Enter Cat Name</th>
						<th ><input type="text" name="Cat" placeholder=" Enter category Name" required ></th>
					</tr>			
					<tr>
						<td></td>
						<td></td>
					</tr>
				
					
				</table>
				<div class="text-center">
					<input type="submit" name="Submit" value="Submit">
					<input type="reset" name="Reset">
				</div>
				
				
			</form>

			

		</div>
		<?php 

			if (isset($_POST['Submit']))
			{
				// $id=$_POST['Id'];
				$cat=$_POST['Cat'];
				$res=addCategory($cat);

				if ($res==1) {
					header('location:category.php');
				}else{
					echo "Add Failed";
				}				

			}

		?>
		

		
		<div class="col-7">
			<h3 class="text-center"> All Category </h3><br>
			
				<?php
				
					echo "<table class='table table-bordered table-striped text-center'>";

						echo "<tr>";

							echo "<th>Cat ID</th>";
							echo "<th>Cat Name</th>";
							echo "<th>Action</th>";

						echo "</tr>";

					$records=getAllCategory();
					$total_records=mysqli_num_rows($records);

					if ($total_records>0)
					{
						while ($row=mysqli_fetch_assoc($records) )

							{
								if (isset($_GET['id']))
								{
									if ($_GET['id']==$row["Cat_id"]) 										
									{
										echo "<form action='' method='post'>";

											echo "<tr>";	
											
												echo'<td><input type="text" name="Id" value="'.$row["Cat_id"].'"readonly></td>';
												echo '<td><input type="text" name="Cat" value="'.$row["Cat_name"].'"></td>';
												echo '<td>
												<input type="submit" name="save" value="Save" style="color:Green;">
												|
												<a href="category.php" style="color:Red;">Cancel </a></td>';

											echo '</tr>';


										echo "</form>";


									}
									else{

										echo "<tr>";

											echo "<td>".$row["Cat_id"]."</td>";
											echo "<td>".$row["Cat_name"]."</td>";
											echo '<td>
											<a href="?id='.$row["Cat_id"].'"name="edit" style="color:Green;">Edit </a>
											|
											<a href="deleteCategory.php?id='.$row["Cat_id"].'" style="color:Red;"> Delete </a></td>';

										echo "</tr>";
									}

								}
								else{

									echo "<tr>";

										echo "<td>".$row["Cat_id"]."</td>";
										echo "<td>".$row["Cat_name"]."</td>";
										echo '<td>
										<a href="?id='.$row["Cat_id"].'"name="edit" style="color:Green;">Edit </a>
										|
										<a href="deleteCategory.php?id='.$row["Cat_id"].'" style="color:Red;"> Delete </a></td>';

									echo "</tr>";
								}
							}
						}
							
					echo "</table>";										
				?>

				
		</div>
		
	</div><br>


	<?php

		if(isset($_POST['save']))
		{
			$id=$_POST['Id'];
			$cat=$_POST['Cat'];
			$res=updateCategory($id,$cat);

			if ($res==1)

			{
				header('location:category.php');
			} else{
				echo "Update Failed";
			}




		}

	?>
	

	</div>


		
	

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>

	
	

</body>
</html>