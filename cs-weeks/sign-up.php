<?php
require '../dynamic/header.php';

?>
<h1 id="main-h1">Assignments</h1>

<div>

  <h2>Sign Up</h2>
  
	<form>
		  <div class="form-group">
			<label for="sign-up-first">First Name</label>
			<input type="text" class="form-control" id="sign-up-first" placeholder="First Name">
		  </div>
		  <div class="form-group">
			<label for="sign-up-last">Last Name</label>
			<input type="text" class="form-control" id="sign-up-last" placeholder="Last Name">
		  </div>
		  <div class="form-group">
			<label for="sign-up-email">Email address</label>
			<input type="email" class="form-control" id="sign-up-email" placeholder="Email">
		  </div>
		  <div class="form-group">
			<label for="sign-up-password">Password</label>
			<input type="password" class="form-control" id="sign-up-password" placeholder="Password">
		  </div>
		  <div>
			<input type="button" class="btn btn-default" value="Submit">
		  </div>
	</form>
	
<?php require '../dynamic/footer.php'; ?>