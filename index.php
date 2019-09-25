<?php
	include 'adminMethod.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Web Service</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	
	
		<div class="container-fluid">
			<div class="row">
				<div class="col-4">
				
									
				</div>
				<div class="col-4">
					<h2 style="text-align: center; padding-top: 40px;">Admin Pannel for Project</h2><br><br>
					<form method="post" action="">
					 <div class="form-group row">
					    <label for="id" class="col-form-label">Admin ID</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="id" name="id" placeholder="Input Admin ID" required>
					    </div>
					  </div><br>
					  <div class="form-group row">
					    <label for="pass" class=" col-form-label">Password</label>
					    <div class="col-sm-10">
					      <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" required>
					    </div>
					  </div>
					  <div class="form-group row" style="padding-left:50%;">
					  <input class="btn btn-primary btn-lg" type="submit" name="login" value="login">
					</div>
					</form>
					
				</div>
				<?php

					if ( isset($_POST['login'])) 
					{
						// $id=$_POST['id'];
						// $pass=$_POST['pass'];
						// $conn=dbconnect();

						// $res=adminlogin($id,$pass);
						$res=adminlogin($_POST);
						// $sql="Select *from admin where id='$id' and pass='$pass'";
						// $records= mysqli_query($conn,$sql);

						$total_record=mysqli_num_rows($res);

						if ($total_record==0) {
							
							echo "<script> alert('Password or id Is Incorrect, Plz Try Again!') </script> ";
						}
						else{
							header('location:home.php');

						}
						
					}

				?>
				<div class="col-4">
                    <h1></h1>
                    

				</div>
				
			</div>
			
		</div>
	 
	
	<script src="js/bootstrap.min.js" ></script>
	




</body>
</html>