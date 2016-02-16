<?php
require '../database/database.php';


if (isset($_POST['sign-up'])) {
	if ($_POST['sign-up-first'] != "" && $_POST['sign-up-first'] != NULL) {
		$query = 'INSERT INTO user (firstname, lastname, username, email, password) VALUES ("' . $_POST['sign-up-first'] . '", "' . $_POST['sign-up-last'] . '", "' . $_POST['sign-up-user'] . '", "' . $_POST['sign-up-email'] . '", "' . crypt($_POST['sign-up-password'], CRYPT_BLOWFISH) . '")';
		$db->exec($query);
		header('Location: sign.php')
	} else {
		$error = '<p>Please fill in every part of the form</p>';
	}
} 

require '../dynamic/header.php';

?>
<h1 id="main-h1">Assignments</h1>
<div>

  <h2>Sign Up</h2>
  
  <?php echo $error; ?>
  
	<form id="sign-up-form" method="post" action="sign-up.php">
		  <div class="form-group">
			<label for="sign-up-first">First Name</label>
			<input type="text" class="form-control" name="sign-up-first" placeholder="First Name" required="required">
		  </div>
		  <div class="form-group">
			<label for="sign-up-last">Last Name</label>
			<input type="text" class="form-control" name="sign-up-last" placeholder="Last Name" required="required">
		  </div>
		  <div class="form-group">
			<label for="sign-up-user">Username</label>
			<input type="text" class="form-control" name="sign-up-user" placeholder="Username" required="required">
		  </div>
		  <div class="form-group">
			<label for="sign-up-email">Email</label>
			<input type="email" class="form-control" name="sign-up-email" placeholder="Email" required="required">
		  </div>
		  <div class="form-group">
			<label for="sign-up-password">Password</label>
			<input type="password" class="form-control" name="sign-up-password" placeholder="Password" required="required">
		  </div>
		  <div class="form-group">
			<input type="submit" class="btn btn-default" form="sign-up-form" value="Sign Up" name="sign-up" required="required">
		  </div>
	</form>
	
<?php require '../dynamic/footer.php'; ?>