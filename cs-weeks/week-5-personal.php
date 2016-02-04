<?php require ('polls_db.php'); ?>

<?php require ('../dynamic/header.php') ?>

<div>
	<h3>Week 5 Team Activity</h3>
	<h4>Scripture Resource</h4>
	<div class="candidates">
	<div>
		<form id="search-form" method="get" action="#">
			<label>Book:</label>
			<input type="text" placeholder="Search..." name="candidate"/>
			<input type="submit" value="Find" form="search-form"/>
		</form>
	</div>
		<ul>
			<?php if ($_GET['book'] != '' && $_GET['book'] != NULL) {
				foreach ($db->query('SELECT firstname, lastname FROM candidate WHERE candidate LIKE "%' . $_GET['candidate'] . '%"') as $candidate) {
					echo '<li><strong>' . $candidate['firstname'] . ' ' . $candidate['lastname'] . ':' . '</strong> <br>' . '<br>' . '</li>';
				}
			} else {
				foreach ($db->query('SELECT firstname, lastname FROM candidate') as $candidate) {
					echo '<li><strong>' . $candidate['firstname'] . ' ' . $candidate['lastname'] . ':' . '</strong> <br>' . '<br>' . '</li>';
				}
			}			?>
		</ul>
	</div>
</div>


<?php require ('../dynamic/footer.php') ?>
