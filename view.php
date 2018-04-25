<?php
require ("function.php");
$viewquery=view_data($conn);

if(isset($_GET['idd2']))
{
	$idd2=$_GET['idd2'];
	delete_data($idd2,$conn);
	
	header("location:index.php");
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
			<a href="form.php"><button type="button" class="btn btn-primary">Add New Record</button></a>
			<h3 class="text-center">Following Data Exists in database</h3>
			<table class="table table-striped table-bordered">
				<thead>
				  <tr>
					<th>id</th>
					<th>Username</th>
					<th>Email</th>
					<th>Password</th>
					<th>Action</th>
				  </tr>
				</thead>
				<tbody>
					<?php
						while($result=mysqli_fetch_array($viewquery)) { ?>
				  <tr>
					<td><?php echo $result['id']; ?></td>
					<td><?php echo $result['username']; ?></td>
					<td><?php echo $result['email']; ?></td>
					<td><?php echo $result['password']; ?></td>
					<td>
						<a href="update.php?idd=<?php echo $result['id']; ?>"><button type="button" class="btn btn-warning">Update</button></a> | 
						<a onclick="return confirm('Are you sure?')" href="?idd2=<?php echo $result['id']; ?>"><button type="button" class="btn btn-danger">Delete</button></a>
					</td>
				  </tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</body>
</html>