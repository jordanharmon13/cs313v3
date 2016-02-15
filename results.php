<?php require('database/database.php') ?>
<?php require 'dynamic/header.php'; ?>

<?php foreach ($db->query('SELECT id, firstname, lastname, votes, party FROM candidate ORDER BY "votes" DESC') as $candidate) {
	if($_POST['report-options'] == 'name') {
		echo '';
		echo '<ul><li>' . $candidate['firstname'] . ' ' . $candidate['lastname'] . '</li></ul>';
	} else if ($_POST['report-options'] == 'votes') {
		echo '<ul><li>' . $candidate['firstname'] . ' ' . $candidate['lastname'] . ' - Candidate Vote Count is ' . $candidate['votes'] . '</li></ul>';
	} else if ($_POST['report-options'] == 'party') {
		echo '<ul><li>' . $candidate['firstname'] . ' ' . $candidate['lastname'] . ' - Candiate Party is ' . $candidate['party'] . '</li></ul>';
	} else if ($_POST['report-options'] == 'id') {
		echo '<ul><li>' . $candidate['firstname'] . ' ' . $candidate['lastname'] . ' - Candidate ID is ' . $candidate['id'] . '</li></ul>';
	}
}?>
<!--
<table border="1">
	<tr>
		<th>Name</th>
		<td>Donald Trump</td>
		<td>Ted Cruz</td>
	</tr>
	<tr>
		<th>Votes</th>
		<td>10</td>
		<td>20</td>
	</tr>
</table>
-->
<h1>Results</h1>
<h3>Run Reports</h3>
	<form name="reports" method="post" action="results.php">
		<div class="form-group">
		  <select name="report-options">
			<option value="name" name="name">By Name</option>
			<option value="votes" name="votes">By Votes</option>
			<option value="party" name="party">By Party</option>
			<option value="id" name="id">By ID</option>
			<option value="poll-results" name="poll-results">Poll Results</option>
		  </select>
		  <br><br>
		  <input class="btn btn-default" name="reports" type="submit">
		</div>
	</form>

<div>

<?php foreach ($db->query('SELECT id, firstname, lastname, votes, party FROM candidate ORDER BY "votes" DESC') as $candidate) {
	echo '<ul><li>' . $candidate['firstname'] . ' ' . $candidate['lastname'] . '</li></ul>';
}
 ?>
</div>
<?php require 'dynamic/footer.php'; ?>