<?php
	session_start();
	require_once "./functions/admin.php";
	$title = "List book";
	require_once "./template/header1.php";
	require_once "./functions/database_functions.php";
	$conn = db_connect();
	$result = getAll($conn);
?>
	<p class="lead"><a href="admin_add.php">-->Add new Product</a></p>
	<p class="lead"><a href="admin_order.php">-->Order product</a></p>
	<p class="lead"><a href="admin_query.php">-->Customer Query</a></p>
	<a href="admin_book.php" style="color: black;
	padding: 6px;
	border: 2px solid black;
	border-radius: :2px;
	text-decoration: none;">->Back to Admin</a>
	<a href="admin_signout.php" class="btn btn-primary">Sign out!</a>
	<table class="table" style="margin-top: 20px">
		<tr>
			<th>Ship_name</th>
			<!-- <th>Product details</th> -->
			<th>Amount</th>
			<th>Date</th>
			<th>ship_address</th>
			<th>Ship_city</th>
			<th>Ship_zip_code</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</tr>

       

		<?php 
		$sql="SELECT * FROM orders";
		//$sql="SELECT a.*,b.book_title FROM `orders` a,`books` b WHERE a.orderid=b.publisherid";
		//$sql="SELECT a.*,b.b_id,b.rank FROM `entry` a,`block` b WHERE a.p_code=b.p_code";
       //echo $sql;
       //$result=$conn->query($sql);
        $result = mysqli_query($conn,$sql);
      //var_dump($result);



      $rows = mysqli_num_rows($result); 
            // get number of rows returned 
          //var_dump($rows);
        if ($rows) {     
          
        while ($row = mysqli_fetch_assoc($result)) {  
        ?>    
             <tr>
             	<td><?= $row['ship_name']; ?></td>
             	<!-- <td><?= $row['book_title']; ?></td> -->
             	<td><?= $row['amount']; ?></td>
             	<td><?= $row['date']; ?></td>
             	<td><?= $row['ship_address']; ?></td>
             	<td><?= $row['ship_city']; ?></td>
             	<td><?= $row['ship_zip_code']; ?></td>
             	
             	
             </tr>
        <?php  }       
              
        }

	?>
	</table>


<?php
	if(isset($conn)) {mysqli_close($conn);}
	require_once "./template/footer.php";
?>