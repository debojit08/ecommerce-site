<?php

$conn=new mysqli("localhost","root","","www_project");
if(!$conn){
	
	die("Connection failed".mysqli_connect_error());
	
}
else{

	//echo "Connected";
}
?>