<?php
	include 'adminMethod.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
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
		<br><br>

		<div class="container">
		<div class="row">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="la.jpg" alt="First slide">
			      <div class="carousel-caption d-none d-md-block">
				    <h5>First Slide lebel</h5>
				    <p>text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unc</p>
				  	</div>
				 </div>

			    <div class="carousel-item">
			      <img class="d-block w-100" src="chicago.jpg" alt="Second slide">
			      <div class="carousel-caption d-none d-md-block">
				    <h5>Second Slide lebel</h5>
				    <p>text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unc</p>
				  	</div>
			    </div>

			    <div class="carousel-item">
			      <img class="d-block w-100" src="ny.jpg" alt="Third slide">
			      <div class="carousel-caption d-none d-md-block">
				    <h5>Third Slide lebel</h5>
				    <p>text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unc</p>
				  	</div>
			    </div>

			  </div>

				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>

				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>

				</div>
				
				 
		</div>
	</div>
		
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>


	

</body>
</html>