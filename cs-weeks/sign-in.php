<?php
require '../dynamic/header.php';

?>
<h1 id="main-h1">Assignments</h1>

<div>

  <h2>Sign In</h2>
	<form id="sign-in-form" action="#" method="post">
		<div class="form-group">
			<label for="sign-in-username">Email address</label>
			<input type="email" class="form-control" id="sign-in-username" placeholder="Email">
		</div>
		<div class="form-group">
			<label for="sign-in-password">Password</label>
			<input type="password" class="form-control" id="sign-in-password" placeholder="Password">
		</div>
		<div class="form-group">
			<input type="button" class="btn btn-default" form="sign-in-form" value="Sign In">
		</div>
	</form>

<?php require '../dynamic/footer.php'; ?>