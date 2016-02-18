<?php 
require('database/database.php');
require 'dynamic/header.php'; ?>
<div>
	<!--
	<table border="1">
		<tr>
			<th>Name</th>
			<th>Votes</th>
		</tr>
		<tr>
			<td>Donald Trump</td>
			<td>Ted Cruz</td>
		</tr>
		<tr>
			<td>10</td>
			<td>20</td>
		</tr>
	</table>
	-->
	<?php $result = $db->query('SELECT SUM(votes) AS total_votes');
		$row = mysql_fetch_array($result);
		$sum = $row['total_votes'];
		print_r($sum);
	?>
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
		<?php

		$totevote = $db->prepare('SELECT votes FROM candidates');
		$totevote->execute();
		$totevote->setFetchMode(PDO::FETCH_ASSOC);
		$votes = $totevote->fetchAll();

		$total = 0;
		foreach ($votes as $each){
		   $total += $each['votes'];
		}
		var_dump($total);

?>
	<?php foreach ($db->query('SELECT id, firstname, lastname, votes, party FROM candidate') as $candidate) {
		$vote_per = $candidate['votes']/$total * 100;
		if($_POST['report-options'] == 'name') {
			echo '<ul><li>' . $candidate['firstname'] . ' ' . $candidate['lastname'] . '</li></ul>';
		} else if ($_POST['report-options'] == 'votes') {
			echo '<ul><li>' . $candidate['firstname'] . ' ' . $candidate['lastname'] . ' - Candidate Vote Count is ' . $candidate['votes'] . '</li></ul>';
		} else if ($_POST['report-options'] == 'party') {
			echo '<ul><li>' . $candidate['firstname'] . ' ' . $candidate['lastname'] . ' - Candiate Party is ' . $candidate['party'] . '</li></ul>';
		} else if ($_POST['report-options'] == 'id') {
			echo '<ul><li>' . $candidate['firstname'] . ' ' . $candidate['lastname'] . ' - Candidate ID is ' . $candidate['id'] . '</li></ul>';
		} else if ($_POST['report-options'] == 'poll-results') {
			echo '<div>' . $candidate['firstname'] . ' ' . $candidate['lastname'] . ' ' . $vote_per . '% <progress max="100" value="' . $vote_per . '"></progress></div>';
		}
	} ?>
</div>

<?php require 'dynamic/footer.php'; ?>