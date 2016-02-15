<?php require('database/database.php') ?>
<?php require 'dynamic/header.php'; ?>

<h1>Results</h1>
<h3>Run Reports</h3>
	<form name="reports" method="post" action="results.php">
		<div class="form-group">
		  <select name="report-options">
			<option value="name">By Name</option>
			<option value="votes">By Votes</option>
			<option value="party">By Party</option>
			<option value="id">By ID</option>
		  </select>
		  <br><br>
		  <input name="reports" type="submit">
		</div>
	</form>

<div>
<?php foreach ($db->query('SELECT id, firstname, lastname, votes, party FROM candidate ORDER BY "votes" DESC') as $candidate) {
	echo '<ul><li>' . $candidate['firstname'] . ' ' . $candidate['lastname'] . '</li></ul>';
}
 ?>
</div>
<?php require 'dynamic/footer.php'; ?>