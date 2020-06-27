<?php session_start();
if(isset($_SESSION['id'])){
	header("location:index.php");
}
?>
<br>
<br>
<br>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	

</head>
<div class="container" id="container">
	<div class="form-container sign-up-container">

		<form action="sin.php" method="post">
			<h1>Create Account</h1>
			<!-- <div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span> -->
			<input type="text" name="first" placeholder="First Name" required />
			<input type="text" name="last" placeholder="Last Name"required />
			<input type="email" name="email" placeholder="email id"required />
			<input type="text" name="uid" placeholder="Username" required/>
			<input type="password" name="pwd" placeholder="Password" required />
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<?php if(isset($_GET['loginerror']) && ($_GET['loginerror']==true)) { ?>
	<span class="error"> &nbsp Invalid Credentials...!</span>
	<?php } ?>
	<?php if(isset($_GET['loginerror1']) && ($_GET['loginerror1']==true)) { ?>
	<span class="error"> &nbsp Username already exixts....!</span>
	<?php } ?>
	<!-- <?php if(isset($_GET['loginerror2']) && ($_GET['loginerror2']==true)) { ?>
	<span class="error"> &nbsp Username already exixts....!</span>
	<?php } ?> -->
		<form action="log.php" method="post">
			<h1>Sign in</h1>
			<!-- <div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span> -->
			<input type="text" name="uid" placeholder="User name" required/>
			<input type="password" name="pwd" placeholder="Password" required/>
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<!-- <footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://florin-pop.com">Florin Pop</a>
		- Read how I created this and how you can join the challenge
		<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
	</p>
</footer> -->
<script>
	const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>