<?php
session_start();
  $title = "Contact";
  require_once "./template/header.php";
 // require "./functions/database_functions.php";
?>
    <!-- <div class="row">
        <div class="col-md-3"></div>
		<div class="col-md-6 text-center">
			<form class="form-horizontal">
			  	<fieldset>
				    <legend>Contact</legend>
				    <p class="lead">I’d love to hear from you! Complete the form to send me an email.</p>
				    <div class="form-group">
				      	<label for="inputName" class="col-lg-2 control-label">Name</label>
				      	<div class="col-lg-10">
				        	<input type="text" class="form-control" id="inputName" placeholder="Name">
				      	</div>
				    </div>
				    <div class="form-group">
				      	<label for="inputEmail" class="col-lg-2 control-label">Email</label>
				      	<div class="col-lg-10">
				        	<input type="text" class="form-control" id="inputEmail" placeholder="Email">
				      	</div>
				    </div>
				    <div class="form-group">
				      	<label for="textArea" class="col-lg-2 control-label">Textarea</label>
				      	<div class="col-lg-10">
				        	<textarea class="form-control" rows="3" id="textArea"></textarea>
				        	<span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
				      	</div>
				    </div>
				    <div class="form-group">
				      	<div class="col-lg-10 col-lg-offset-2">
				        	<button type="reset" class="btn btn-default">Cancel</button>
				        	<button type="submit" class="btn btn-primary">Submit</button>
				      	</div>
				    </div>
			  	</fieldset>
			</form>
		</div>
		<div class="col-md-3"></div>
    </div> -->
    <head>
    	
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <section id="contact">
	<div class="container">
		<br>
		<br>
		<h2>Get In Touch</h2>
		<div class="row">
			<div class="col-md-6">
				<form class="contact-form" action= "contact_action.php"  method="POST">
					<div class="form-group">
						<input type="text" name="name" class="form-control" placeholder="Your Name">
					</div>
					<div class="form-group">
						<input type="number" name="no" class="form-control" placeholder="Phone no.">
					</div>
					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="Email id">
					</div>
					<div class="form-group">
						<textarea class="form-control" name="msg" rows="4" placeholder="Message"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">SEND MESSAGE</button>
				</form>
			</div>
			<div class="col-md-6 contact-info">
				<div class="follow">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Address:</b> <i class="fa fa-map-marker"></i>Banglore, IN</div><br>
			
				<div class="follow">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Phone:</b> <i class="fa fa-phone"></i> 1800 008 0092</div><br>
			
				<div class="follow">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Email:</b> <i class="fa fa-envelope-o"></i> electricalstore@gmail.com</div><br>

				<div class="follow"><label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Get Social:</b></label>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-youtube"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>

<style type="text/css">
	#contact
{

	padding-top:40px;
	padding-bottom: 40px;
	color: #555;
	background-color: #efefef;
}
h2
{
	text-align: center;
	color: #555!important;
	padding-bottom: 10px;
}
h2::after
{
	content: '';
	background: #007bff;
	display: block;
	height: 3px;
	width: 130px;
	margin: 20px auto 5px;
}
.contact-form
{
	padding: 15px;
}
</style>



<?php
  require_once "./template/footer.php";
?>

<script>
	<?php if(isset($_GET['success']) && $_GET['success']=="true"){
    ?>
    alert("Message Send");
 <?php } ?>
</script>