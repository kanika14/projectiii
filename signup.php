<?php 
include_once "inc/header.php";
 ?>

<div class="container">
	<div class="row">
	 	
			<h1>Register</h1>
			<div id="register_output" class=""></div>
	 			<div class="input-field col s6">
	 			    <i class="material-icons prefix">account_circle</i>
					<input id="username" type="text" class="validate">
					<label for="icon_prefix" data-error="wrong" data-success="right">Name</label>
				</div>
				<div class="input-field col s6">
	 			    <i class="material-icons prefix">email</i>
					<input id="email" type="email" class="validate">
					<label for="icon_prefix" data-error="wrong" data-success="right">Email</label>
				</div>
				<div class="input-field col s6">
	 			    <i class="material-icons prefix">contact_phone</i>
					<input id="phone" type="tel" maxlength="10" class="validate">
					<label for="icon_prefix" data-error="wrong" data-success="right">Phone No.</label>
				</div>
				
				<div class="input-field col s6">
	          		<i class="material-icons prefix">lock</i>	
					<input id="password" type="password" class="validate">
					<label for="icon_telephone" data-error="wrong" data-success="right">Password</label>
        		</div>
        		<div class="input-field col s6">
        		<p>You Are a ...  <br>
				      <input name="group1" type="radio" id="test1" />
				      <label for="test1">Red</label>
				    </p>
				    <p>
				      <input name="group1" type="radio" id="test2" />
				      <label for="test2">Yellow</label>
				    </p>
				</div> 
				<div class="input-field col s12">
					<button class="waves-effect waves-light btn" type="submit" name="register" id="register"><i class="material-icons left">send</i>Register</button>
				</div>
	</div>
</div>



