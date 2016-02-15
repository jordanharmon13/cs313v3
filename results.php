<?php require('database/database.php') ?>
<?php require 'dynamic/header.php'; ?>

<h1>Results</h1>
<?php foreach ($db->query('SELECT firstname, lastname, votes, party FROM candidate ORDER BY "votes" DESC') as $candidate) {
	echo '<div>' . $candidate . '</div>;
	
} ?>

<?php require 'dynamic/footer.php'; ?>