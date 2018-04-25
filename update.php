<?php
require ("function.php");
$idd=$_GET['idd'];
$viewquery=update_view_data($conn,$idd);


	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		
		update_data($email,$username,$password,$conn,$idd);
		
		header("location: index.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>CRUD using Functions</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<h1 class="text-center">CRUD using <code>functions()</code></h1>
			<form action="" method="post" enctype="multipart/form-data">
				<?php
						while($result=mysqli_fetch_array($viewquery)) { ?>
				<div class="form-group">
				  <label for="email">Email:</label>
				  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $result['email'] ?>">
				</div>
				<div class="form-group">
				  <label for="username">Username:</label>
				  <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" value="<?php echo $result['username'] ?>">
				</div>
				<div class="form-group">
				  <label for="password">Password:</label>
				  <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" value="<?php echo $result['password'] ?>">
				</div>
				<button type="close" class="btn btn-default">Cancel</button>
				<button type="submit" class="btn btn-default">Submit</button>
				<?php }?>
			</form>
			<hr>
		</div>
		<?php require("footer.php"); ?>
	</body>
</html>