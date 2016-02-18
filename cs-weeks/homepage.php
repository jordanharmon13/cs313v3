<?php
session_start();

if (isset($_SESSION['username']))
{
	$username = $_SESSION['username'];
}
else
{
	header("Location: sign-in.php");
	die();
}

?>
<?php require '../dynamic/header.php'; ?>
<div>

	<h1>Homepage</h1>
	
	<h2>Welcome</h2>

	<p>Your username is: <?php echo $username ?></p>

</div>

<?php require '../dynamic/footer.php'; ?>
