<?php require('database/database.php') ?>
<?php require 'dynamic/header.php'; ?>

<?php $candidate_info = $db->query('SELECT id, firstname, lastname, votes, party FROM candidate ORDER BY "votes" DESC'; 
print_r($candidate_info['firstname'];?>

<h1>Results</h1>
<h3>Run Reports</h3>
	<form name="reports" method="post" action="results.php">
		<div class="form-group">
		  <select name="report-options">
			<option value="<?php $candidate_info['name']; ?>" name="name">By Name</option>
			<option value="votes" name="votes">By Votes</option>
			<option value="party" name="party">By Party</option>
			<option value="id" name="id">By ID</option>
		  </select>
		  <br><br>
		  <input name="reports" type="submit">
		</div>
	</form>

<div>

<?php if(isset($_POST('reports') {
	$selected_val = $_POST['report-options'];
	echo '<p>You selected ' . $selected_val . '</p>';
} ?>


<form action="#" method="post">
<select name="Color">
<option value="Red">Red</option>
<option value="Green">Green</option>
<option value="Blue">Blue</option>
<option value="Pink">Pink</option>
<option value="Yellow">Yellow</option>
</select>
<input type="submit" name="submit" value="Get Selected Values" />
</form>
<?php
if(isset($_POST['submit'])){
$selected_val = $_POST['Color'];  // Storing Selected Value In Variable
echo "You have selected :" .$selected_val;  // Displaying Selected Value
}
?>

<?php foreach ($db->query('SELECT id, firstname, lastname, votes, party FROM candidate ORDER BY "votes" DESC') as $candidate) {
	echo '<ul><li>' . $candidate['firstname'] . ' ' . $candidate['lastname'] . '</li></ul>';
}
 ?>
</div>
<?php require 'dynamic/footer.php'; ?>