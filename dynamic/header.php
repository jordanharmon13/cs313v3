<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Presidential Poll</title>
  <meta name="description" content="This page is to help people know the opinions of others.">

  <meta name="author" content="Jordan Harmon">

  <link rel="stylesheet" href="../css/stylesheet.css?v=1.0">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<body>
<div class="container">

<?php if (isset($_SESSION['username'])) {
	$username = $_SESSION['username'];?>
	
	<!--<nav class="dropdown">
		<ul>
			<li id="about-me"><a href="../index.php">About Me</a></li>
			<li id="polls"><a href="../polls.php">Polls</a></li>
			<li id="assignments"><a href="../assignments.php">Assignments</a></li>	
			<li id="log-in"><a href="../cs-weeks/sign-out.php">Sign Out</a></li>				

		</ul>
	</nav>-->
	<div class="dropdown">
		<button class="dropbtn">Dropdown</button>
		<div class="dropdown-content">
			<a href="../index.php">About Me</a>
			<a href="../polls.php">Polls</a>
			<a href="../assignments.php">Assignments/a>
			<a href="../cs-weeks/sign-out.php">Sign Out</a>
	    </div>
	</div>
	<?php
} else { ?>
	<!--<nav class="ddmenu">
		<ul>
			<li id="about-me"><a href="../index.php">About Me</a></li>
			<li id="polls"><a href="../polls.php">Polls</a></li>
			<li id="assignments"><a href="../assignments.php">Assignments</a></li>	
			<li id="log-in"><a href="../cs-weeks/sign-in.php">Sign In</a></li>	
			<li id="sign-up"><a href="../cs-weeks/sign-up.php">Sign Up</a></li>		
			

		</ul>
	</nav>-->
	<div class="dropdown">
		<button class="dropbtn">Dropdown</button>
		<div class="dropdown-content">
			<a href="../index.php">About Me</a>
			<a href="../polls.php">Polls</a>
			<a href="../assignments.php">Assignments/a>
			<a href="../cs-weeks/sign-in.php">Sign In</a>
			<a href="../cs-weeks/sign-up.php">Sign Up</a>
	    </div>
	</div>
<?php } ?>
