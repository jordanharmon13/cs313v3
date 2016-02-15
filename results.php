<?php require('database/database.php') ?>
<?php require 'dynamic/header.php'; ?>

<?php foreach ($db->query('SELECT id, firstname, lastname, votes, party FROM candidate ORDER BY "votes" DESC') as $candidate) {
	if($_POST['report-options'] == 'name') {
		echo 'This is name';
	} '<ul><li>' . $candidate['firstname'] . ' ' . $candidate['lastname'] . '</li></ul>';
} ?>

<h1>Results</h1>
<h3>Run Reports</h3>
	<form name="reports" method="post" action="results.php">
		<div class="form-group">
		  <select name="report-options">
			<option value="name" name="name">By Name</option>
			<option value="votes" name="votes">By Votes</option>
			<option value="party" name="party">By Party</option>
			<option value="id" name="id">By ID</option>
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