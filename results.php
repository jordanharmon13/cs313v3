<?php require('database/database.php') ?>
<?php require 'dynamic/header.php'; ?>

<h1>Results</h1>

<div>
<?php foreach ($db->query('SELECT firstname, lastname, votes, party FROM candidate') as $candidate) {
	echo '<ul><li>' . $candidate['id'] . '</li></ul>';
	print_r($candidate);
}
print_r($candidate);
 ?>
</div>
<?php require 'dynamic/footer.php'; ?>