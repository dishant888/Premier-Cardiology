<?php 
include('config.php');
$id = $_REQUEST['id'];
$result = mysqli_query($con,"UPDATE `users` SET `delete_status`=1 WHERE `id`=$id");
if($result)
{
	echo "<script>alert('User Deleted!');location.href='add_user.php'</script>";
}

 ?>