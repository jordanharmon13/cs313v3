<?php
session_start();
if (isset($username)) {
	$username = $_SESSION['username'];
} else {
	header('Location: sign-in.php')
	die();
}
require '../dynamic/header.php';

?>
<h1 id="main-h1">Assignments</h1>

<div>

  <h2>Welcome</h2>
  <p>Welcome <?php echo $username; ?>, you are now a member.</p>
  

<?php require '../dynamic/footer.php'; ?>