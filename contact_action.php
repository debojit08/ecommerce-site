<?php

include"db.php";
$name=$_POST['name'];
$no=$_POST['no'];
$email=$_POST['email'];
$msg=$_POST['msg'];

 $sql="INSERT INTO contact(name,no,email,msg) 
 VALUES ('$name','$no','$email','$msg')";
$result=$conn->query($sql);

header("location:contact.php?success=true");

?>
