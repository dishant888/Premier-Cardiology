<?php 
include('config.php');
$id = $_REQUEST['id'];
if(isset($_REQUEST['edit']))
{
	$id = $_REQUEST['id'];
	$name = $_REQUEST['name'];
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	$query = "UPDATE `users` SET name='$name',username='$username',password='$password' WHERE `id`=$id";
	$result = mysqli_query($con,$query);
	if($result)
		echo "<script>alert('Updated Successfully...');location.href='add_user.php'</script>";
	else
		echo "<script>alert('Error! Try Again Later')</script>";
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Add User</title>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 </head>
 <body>
 <?php include('header.php') ?>
 <div class="container">
 	<div class="row">
	 	<div class="col-12 col-sm-4">
	 		<form action="edit_user.php" class=" border bg-light shadow p-3 mt-3" method="post">
	 		<?php 
	 		$query2 = "SELECT * FROM `users` WHERE `id`=$id";
			$result2 = mysqli_query($con,$query2);
	 		while($row = mysqli_fetch_array($result2)){
	 		 ?>
	 		<div class="row">
	 			<div class="col-12">
	 				<div class="form-group">
	 					<label>Name:</label>
	 					<input type="hidden" name="id" value="<?=$id?>">
	 					<input type="text" name="name" value="<?=$row['name']?>" required class="form-control form-control-sm" placeholder="Enter Name">
	 				</div>
	 			</div>
	 			<div class="col-12">
	 				<div class="form-group">
	 					<label>Username:</label>
	 					<input type="text" name="username"  value="<?=$row['username']?>"required placeholder="Enter Username" class="form-control form-control-sm">
	 				</div>
	 			</div>
	 			<div class="col-12">
	 				<div class="form-group">
	 					<label>Password:</label>
	 					<input type="text" name="password"  value="<?=$row['password']?>" required placeholder="Enter Password" class="form-control form-control-sm">
	 				</div>
	 			</div>
	 			<div class="col-12 text-center">
	 				<input type="submit" value="Save Changes" name="edit" class="btn btn-sm btn-info rounded-0">
	 			</div>
	 		</div>
	 	<?php } ?>
	 	</form>
	 	</div>
	 	<!-- view -->
	 	<div class="col-12 col-sm-7 offset-1 border bg-light shadow p-3 mt-3 table-responsive">
	 		<table class="table table-sm">
	 			<thead>
	 				<tr>
	 					<th style="width: 10%">S.No.</th>
	 					<th style="width: 70%;text-align: center;">Name</th>
	 					<th style="width: 20%">Action</th>
	 				</tr>
	 			</thead>
	 			<tbody>
	 				<?php $users=mysqli_query($con,"SELECT * FROM `users` WHERE `delete_status`=0 ORDER BY `id` DESC"); ?>
	 				<?php $i=0; foreach($users as $row): ?>
	 					<tr>
	 						<td style="text-align:center;"><?=++$i?></td>
	 						<td style="text-align:center;"><?=$row['name']?></td>
	 						<td>
	 							<a href="edit_user.php?id=<?=$row['id']?>">Edit</a>&nbsp&nbsp
	 							<a onclick="return confirm('Are you Sure?')" href="delete_user.php?id=<?=$row['id']?>">Delete</a>
	 						</td>
	 					</tr>
	 				<?php endforeach; ?>
	 			</tbody>
	 		</table>
	 	</div>
	 </div>
 </div>
 </body>
 </html>