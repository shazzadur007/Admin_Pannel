<?php

	function dbconnect()
	{
		$hostname="localhost";
		$username="root";
		$password="";
		$databasename="admin";

		$conn=mysqli_connect($hostname, $username, $password, $databasename);

		return $conn;
	}

// Admin Login

	function adminlogin($data)
	{
		$id= $data['id'];
		$pass=$data['pass'];

		$conn=dbconnect();

		if ($conn) {
			$sql="Select *from admin where id='$id' and pass='$pass'";

			$records= mysqli_query($conn,$sql);
		}

		else
		{
			echo "Bridge Connection failed";

		}

		return $records;
	}


//Add Category function
	
	function addCategory($cat)

	{
		
		$conn= dbconnect();

		if ($conn) {
			
			$sql= "INSERT INTO category(cat_name) VALUES('$cat') ";

			$res= mysqli_query($conn,$sql);

		}else{
			echo " Bridge Connection failed";
		}
		return $res;

	}


 
	function getAllCategory()

		{

			$conn=dbconnect();
			if ($conn )
			{			
				$sql="select *from category";
				$result= mysqli_query($conn,$sql);
				$total_rec= mysqli_num_rows($result);
			}
			else{
				echo "Connection Failed";
			}
			return $result;
		}



	function updateCategory($id,$cat)

		{
			$conn=dbconnect();
			if ($conn )
			{
				$sql="update category set Cat_name='$cat' where Cat_id='$id'";
				$res=mysqli_query($conn,$sql);			
			}else{
				echo "Bridge Connection Failed";
			}
			return $res;
		}


	function  deleteCategory($id)

		{
			$conn=dbconnect();
			if ($conn )
			{
				$sql="delete from category where Cat_id='$id'";
				$res=mysqli_query($conn,$sql);			
			}else{
				echo "Bridge Connection Failed";
			}
			return $res;

		}






?>