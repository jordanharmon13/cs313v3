<?php
require '../database/database.php';
require '../dynamic/header.php';

?>
<h1 id="main-h1">Assignments</h1>
<?php 
if (isset($_POST['Sign Up'])) {
	if ($_POST['sign-up-first'] != "" && $_POST['sign-up-first'] != NULL && $_POST['sign-up-last'] != "" && $_POST['sign-up-last'] != NULL && $_POST['sign-up-user'] != "" && $_POST['sign-up-user'] != NULL && $_POST['sign-up-password'] != "" && $_POST['sign-up-password'] != NULL) {
		$query = 'INSERT INTO user (firstname, lastname, username, password) VALUES (' . $_POST['sign-up-first'] . ', ' . $_POST['sign-up-last'] . ', ' . $_POST['sign-up-user'] . ', ' . $_POST['sign-up-password'] . ')';
		$db->exec($query);
	} else {
		echo '<p>Please fill in every part of the form</p>';
	}
} 
?>
<div>

  <h2>Sign Up</h2>
  
	<form id="sign-up-form" method="post" action="sign-up.php">
		  <div class="form-group">
			<label for="sign-up-first">First Name</label>
			<input type="text" class="form-control" name="sign-up-first" placeholder="First Name">
		  </div>
		  <div class="form-group">
			<label for="sign-up-last">Last Name</label>
			<input type="text" class="form-control" name="sign-up-last" placeholder="Last Name">
		  </div>
		  <div class="form-group">
			<label for="sign-up-user">Username</label>
			<input type="email" class="form-control" name="sign-up-user" placeholder="Username">
		  </div>
		  <div class="form-group">
			<label for="sign-up-password">Password</label>
			<input type="password" class="form-control" name="sign-up-password" placeholder="Password">
		  </div>
		  <div class="form-group">
			<input type="button" class="btn btn-default" form="sign-up-form" value="Sign Up" name="sign-up">
		  </div>
	</form>
	
<?php require '../dynamic/footer.php'; ?>