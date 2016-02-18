<?php
session_start();

if (isset($_SESSION['username']))
{
	$username = $_SESSION['username'];
}
else
{
	header("Location: signIn.php");
	die();
}

?>
<?php require '../dynamic/header.php'; ?>
<div>

	<h1>Welcome to the homepage!</h1>

	<p>Your username is: <?php $username ?></p>

</div>

<?php require '../dynamic/footer.php'; ?>
