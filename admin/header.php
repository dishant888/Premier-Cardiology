<?php 
session_start();
if(!isset($_SESSION['verified']))
{
  session_destroy();
  header('location:../login.php');
}
 ?>
<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Create</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="list.php">View</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add_user.php">Add User</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav><br><br>