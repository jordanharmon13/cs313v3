<?php
session_start();
if (!isset($_SESSION['logged-in'])) {
	header('Location: sign-in.php')
}
require '../dynamic/header.php';

?>
<h1 id="main-h1">Assignments</h1>

<div>

  <h2>Welcome</h2>
  <p>Welcome <?//php $_SESSION['firstname']; ?>, you are now a member.</p>
  

<?php require '../dynamic/footer.php'; ?>