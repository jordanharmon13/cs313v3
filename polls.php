<?php require('database/database.php') ?>
<?php require 'dynamic/header.php'; ?>

<h1>Polls Application</h1>
<div><p>This is where the polls application will be located. For the moment, we will have this application below to illustrate what I will be creating, but I will be connecting it to my own database.</p></div>

<div class="more-outer-form-div">
	<div class="outer-form-div">
		<strong>Who will you vote for in 2016?</strong>
		
		<form id="search-form" method="get" action="#">
			<label>Book:</label>
			<input type="text" placeholder="Search..." name="book"/>
			<input type="submit" value="Find" form="search-form"/>
		</form>
			<form id="pres-poll" method="post" action="polls.php">
				<?php if ($_GET['candidate'] != '' && $_GET['candidate'] != NULL) {
					foreach ($db->query('SELECT firstname, lastname, votes FROM candidates WHERE firstname LIKE "%' . $_GET['firstname'] . '%"') as $scripture) {
						echo '<input name="candidate" value="' . $candidate['id'] . '" type="radio" class="form-style" id="' . $candidate['id'] . '" /><label for="' . $candidate['id'] . '" style="form-label">' . $candidate['firstname'] . ' ' . $candidate['lastname'] . '</label>';
						echo '<div class="inner-form-div"></div>';
					}
				} else {				
					foreach ($db->query('SELECT id, firstname, lastname, votes FROM candidate') as $candidate) {
						echo '<input name="candidate" value="' . $candidate['id'] . '" type="radio" class="form-style" id="' . $candidate['id'] . '" /><label for="' . $candidate['id'] . '" style="form-label">' . $candidate['firstname'] . ' ' . $candidate['lastname'] . '</label>';
						echo '<div class="inner-form-div"></div>';
					}
				} ?>
				<input type="radio" name="candidate" value="third-party" />
				<input type="text" name="third-party-first-name" placeholder="First name" />
				<input type="text" name="third-party-last-name" placeholder="Last name" />
				<input type="text" name="third-party-party" placeholder="Party" />
				<input type="submit" form="pres-poll" />
			</form>
		</div>
	</div>

<?php require 'dynamic/footer.php'; ?>