 <?php
// 	session_start();
// 	if(!isset($_POST['submit'])){
// 		echo "Something wrong! Check again!";
// 		exit;
// 	}
// 	require_once "./functions/database_functions.php";
// 	$conn = db_connect();

// 	$name = trim($_POST['name']);
// 	$pass = trim($_POST['pass']);

// 	if($name == "" || $pass == ""){
// 		echo "Name or Pass is empty!";
// 		exit;
// 	}

// 	$name = mysqli_real_escape_string($conn, $name);
// 	$pass = mysqli_real_escape_string($conn, $pass);
// 	$pass = sha1($pass);

// 	// get from db
// 	$query = "SELECT name, pass from admin";
// 	$result = mysqli_query($conn, $query);
// 	if(!$result){
// 		echo "Empty data " . mysqli_error($conn);
// 		exit;
// 	}
// 	$row = mysqli_fetch_assoc($result);

// 	if($name != $row['name'] && $pass != $row['pass']){
// 		echo "Name or pass is wrong. Check again!";
// 		$_SESSION['admin'] = false;
// 		exit;
// 	}

// 	else
// 	{



// 	if(isset($conn)) {mysqli_close($conn);}
// 	$_SESSION['admin'] = true;
// 	header("Location: admin_book.php");
// }
?>


<?php


	session_start();
	if(isset($_POST['submit'])){
		$conn=new mysqli("localhost","root","","www_project");
if(!$conn){
	
	die("Connection failed".mysqli_connect_error());
	
}
// else{

// 	//echo "Connected";
// }
		// echo "Something wrong! Check again!";
		// exit;
	
	// require_once "./functions/database_functions.php";
	// $conn = db_connect();


	$name = trim($_POST['name']);
	$pass = trim($_POST['pass']);

	if($name == "" || $pass == ""){
		//echo "Name or Pass is empty!";
		echo "<script type='text/javascript'>alert('Name or Pass is empty!');window.location.href='admin.php';</script>";
		exit;
	}



	// $name = mysqli_real_escape_string($conn, $name);
	// $pass = mysqli_real_escape_string($conn, $pass);
	// $pass = sha1($pass);

// 	// get from db
	$query = "SELECT * from admin WHERE name='$name' AND pass='$pass'";
	$result = mysqli_query($conn, $query);
	$cnt=mysqli_num_rows($result);
	if($cnt==1){
		$_SESSION['admin'] = true;
	header("Location: admin_book.php");
		
	}
	// $row = mysqli_fetch_assoc($result);
	// $cnt=mysqli_num_rows($result);
	// if($cnt==1){
	// 	$_SESSION['admin'] = true;
	// header("Location: admin_book.php");


	else{
		//echo $cnt;
		echo "<script type='text/javascript'>alert('Name or pass is wrong. Check again!');window.location.href='admin.php';</script>";
		$_SESSION['admin'] = false;

		exit;

	}


	  // if(isset($conn)) {
	 	mysqli_close($conn);
	  }

// // 	// $_SESSION['admin'] = true;
// 	// header("Location: admin_book.php");
?>

<script type="text/javascript"></script>