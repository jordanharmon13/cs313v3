<?php require('database/database.php') ?>
<?php require 'dynamic/header.php'; ?>

<?php $candidate_info = $db->query('SELECT * FROM candidate WHERE "votes" >= 0'); 
print_r($candidate_info); ?>

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