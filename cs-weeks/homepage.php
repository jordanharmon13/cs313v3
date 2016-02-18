<?php
session_start();
if (!isset($_SESSION['username'])) {
	header('Location: sign-in.php')
	die();
} else {
	$username = $_SESSION['username'];
}
require '../dynamic/header.php';

?>
<h1 id="main-h1">Assignments</h1>

<div>

  <h2>Welcome</h2>
  <p>Welcome <?php echo $username; ?>, you are now a member.</p>
  

<?php require '../dynamic/footer.php'; ?>