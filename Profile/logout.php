<?php
require 'connect.php';

  if (!isset($_SESSION['username'])) {
  	header("Location:profile.php");
  	exit;
  }


  	if (isset($_POST['logout'])) {
  		$_SESSION = array();
  		session_destroy();
  		echo'<script>alert("You have been logged out.");</script>';
  		header("Location: login.php");
  		exit;
}
  
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Index</title>
</head>
<body>
<h1> WELCOME </h1>
<a href="login.php"> Logout </a>
</body>
</html>