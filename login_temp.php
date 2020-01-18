<?php 
include('admin/config.php');
if(isset($_REQUEST['login']))
{
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	$query = "SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password' AND `delete_status`=0";
	$result = mysqli_query($con,$query);$f=0;	
	while($row = mysqli_fetch_array($result))
	{
		$f=1;
		session_start();
		$_SESSION['u_id'] = $row['id'];
		header('location:index.php');
	}
	if($f==0){
		echo "<script>alert('Invalid Credentials')</script>";
	}else
	{
		header('location:index.php');
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
	<div class="container mt-5">
	<div class="row m-5">
		<div class="col-12 col-sm-4 offset-sm-4 p-3 mt-5">
			<div class="row">
				<div class="col-12 mt-5 p-3 bg-light border shadow">
					<form action="login.php" method="post">
					<div class="row">
						<div class="col-12 text-center">
							JDK Web Solutions and JDK Multimedia LLC
						</div>
						<div class="col-12">
							<div class="form-group">
								<label>Username:</label>
								<input type="text" name="username" class="form-control form-control-sm">
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<label>Password:</label>
								<input type="password" name="password" class="form-control form-control-sm">
							</div>
						</div>
						<div class="col-12 text-center">
							<div class="form-group"><br>
								<input type="submit" name="login" value="LOGIN" class="btn-sm btn btn-primary">
							</div>
						</div>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>