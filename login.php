<?php 
include('inc/header.php');
include_once("dbcon.php");
?>
<title>Login</title>

<?php include('container.php');?>
<div class="container">	
	<form class="form-login" method="post" id="login-form">
		<h2 class="form-login-heading">Log In</h2><hr />
		<div id="error">
		</div>
		<div class="form-group input-field inline">
			<input type="email" class="form-control validate" placeholder="Email address" name="user_email" id="user_email" />
			<span id="check-e"></span>
		</div>
		<div class="form-group">
			<input type="password" class="form-control validate" placeholder="Password" name="password" id="password" />
		</div>
		<hr />
		<div class="form-group input-field inline">
			<button type="submit" class="waves-effect waves-light btn" name="login_button" id="login_button">
			<i class="material-icons left">cloud</i>Register</button>
		</div> 
	</form>			
</div>
<?php include('footer.php');?>