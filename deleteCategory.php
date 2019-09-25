<?php

include 'adminMethod.php';


$id=$_GET['id']; // hyperlink request always get method use hoy || request method 3 type || text, hyperlink, form request|| method 2 types|| get method, post method

$res=deleteCategory($id);

if ($res==1) {
	
	header('location:category.php');
}
else{
	echo "Failed To delete";
}



?>