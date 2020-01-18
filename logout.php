<?php 
session_start();
$_SESSION['u_id'] = 0;
header('location:login.php');
 ?>