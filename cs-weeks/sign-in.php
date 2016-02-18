<?php
session_start();
require '../database/database.php';

$username = $_POST['sign-in-username'];

if (isset($_POST['sign-in'])) {
	$query = 'SELECT * FROM user WHERE username = "' . $_POST['sign-in-username'] . '"';
	$user = $db->prepare($query);
	$user->execute();
	$user->setFetchMode(PDO::FETCH_ASSOC);
	$usr = $user->fetchAll();
	$pass2 = crypt($_POST['sign-in-password'], CRYPT_BLOWFISH);
	print_r('this is my usr ' . $usr[0]['password']);
	print_r('this is my pass2 ' . $pass2);
		if ($usr[0]['password'] == $pass2) {
			//$_SESSION['id'] = $usr[0]['id'];
			$_SESSION['username'] = $username;
			header('Location: homepage.php');
			die();
		} else {
			$error = 'Please provide valid login';
		}
	}
require '../dynamic/header.php';

?>
<h1 id="main-h1">Assignments</h1>

<p><?php echo $error; ?></p>

  <h2>Sign In</h2>
	<form id="sign-in-form" action="sign-in.php" method="post">
		<div class="form-group">
			<label for="sign-in-username">Username</label>
			<input type="text" class="form-control" name="sign-in-username" placeholder="Username" required="required">
		</div>
		<div class="form-group">
			<label for="sign-in-password">Password</label>
			<input type="password" class="form-control" name="sign-in-password" placeholder="Password" required="required">
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-default" form="sign-in-form" value="Sign In" name="sign-in">
		</div>
	</form>
	<p>Don't have an account? Click <a href="sign-up.php">HERE</a> to register.</p>

<?php require '../dynamic/footer.php'; ?>