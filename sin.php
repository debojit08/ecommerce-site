<?php


include 'db.php';
$first=$_POST['first'];
$last=$_POST['last'];
$email=$_POST['email'];
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];

$sql="select * from users where (uid='$uid');";

      $res=mysqli_query($conn,$sql);

      if (mysqli_num_rows($res) > 0) {
        // output data of each row
        $row = mysqli_fetch_assoc($res);
        if ($uid==$row['uid'])
        {
            header("Location:login.php?loginerror1=true");
        }
        //  else($email==$row['email'])
        // {
        //     header("Location:login.php?loginerror2=true");
        // }

       } else{ // if condition ends here if it is new entry, echo will work
            header("Location:login.php");
        }

 $sql="INSERT INTO users(first,last,email,uid,pwd) 
 VALUES ('$first','$last','$email','$uid','$pwd')";
$result=$conn->query($sql);




$_SESSION['last']=$row['lastname'];
	 
 
//header("Location:login.php");
?>