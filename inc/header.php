<!DOCTYPE html>
<html>
<head>
	<title>The Social Network</title>
		<script type="text/javascript" src="script/jquery.min.js"></script>
		<script type="text/javascript" src="script/materialize.min.js"></script>
		<script type="text/javascript" src="script/validation.min.js"></script>
		<script src="script/common.js"></script>
		<script type="text/javascript" src="script/register.js"></script>
		
		<link rel="stylesheet" type="text/css" href="css/materialize.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
	<body>
	<div class="navbar-fixed">
		<nav>
		  <div class="nav-wrapper">
		    <a href="#!" class="brand-logo left">The Social Network</a>
		    <ul class="right hide-on-med-and-down">
		      <li><a href="index.php">Home</a></li>
		      <li><a href="">About Us</a></li>
		      <li><a href="">Contact Us</a></li>
		      <?php if(!isset($_SESSION['user_session'])) { ?>
		      	<li><a href="login.php">Login</a></li>
		     	<li><a href="signup.php">Signup</a></li>
		     <?php  } else { ?>
		     <ul id="dropdown1" class="dropdown-content customdropdown">
		       <li><a href="welcome.php">View Profile</a></li> 
		      <li><a href="logout.php">Logout</a></li>
		     </ul>
		      
		     <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons right">account_circle</i></a></li>
		      <?php } ?>
		      
		      
	    	</ul>
		  </div>
		</nav>
	</div>
	</body>
</html>