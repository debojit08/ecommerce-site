<?php session_start();
if(!isset($_SESSION['id'])){
	header("location:login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" type="text/css" href="innerstyle.css"> 
	<title></title>
</head>
<body>
	<div class="welcomeUser">Welcome <?= $_SESSION['name']; ?> <span class="logout"><a href="logout.php">Log Out</a></span></div>

</body>

</html>
