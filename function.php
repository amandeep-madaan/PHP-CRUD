<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="mydbtraining";
$conn = mysqli_connect($servername, $username, $password,$db);

	//following function will view data
	function view_data($conn)
	{
		$sql="select * from functions_basic";
		$query=mysqli_query($conn,$sql) or die("check your view query");
		return $query;
	}
	
	//following function will insert data
	function upload_data($email,$username,$password,$conn)
	{
		$sql="INSERT INTO functions_basic (email,username,password) values ('$email','$username','$password')";
		$query=mysqli_query($conn,$sql) or die("check your insert query");
	}
	
	//following function will delete the data
	function delete_data($idd2,$conn)
	{
		$sql="DELETE FROM functions_basic WHERE id='$idd2'";
		$query=mysqli_query($conn,$sql) or die("check your delete query");
	}
	
	//following function will view data in update form
	function update_view_data($conn,$idd)
	{
		$sql="select * from functions_basic WHERE id='$idd'";
		$query=mysqli_query($conn,$sql) or die("check your view query");
		return $query;
	}
	//following function will update data
	function update_data($email,$username,$password,$conn,$idd)
	{
		$sql="UPDATE functions_basic SET email= '$email', username= '$username', password= '$password' WHERE id='$idd'";
		$query=mysqli_query($conn,$sql) or die("check your update query");
	}
?>