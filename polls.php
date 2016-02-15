<?php require('database/database.php') ?>
<?php require 'dynamic/header.php'; ?>

<h1>Polls Application</h1>
<div><p>This is where the polls application will be located. For the moment, we will have this application below to illustrate what I will be creating, but I will be connecting it to my own database.</p></div>
<div class="container-fluid">
<a class="btn btn-default" href="results.php" role="button">Run Reports</a>

	<div>
		<strong>Who will you vote for in 2016?</strong>
		
		<form id="search-form" method="post" action="polls.php">
			<div class="form-group">
				<label>Reports:</label>
				<input class="form-control" type="text" placeholder="Search..." name="firstname"/>
				<input class="btn btn-default" type="submit" value="Find" form="search-form"/>
			</div>
		</form>
		<form id="pres-poll" method="post" action="polls.php">
			<?php if ($_POST['firstname'] != '' && $_POST['firstname'] != NULL) {
				foreach ($db->query('SELECT firstname, lastname, votes FROM candidate WHERE firstname LIKE "%' . $_POST['firstname'] . '%"') as $candidate) {
					echo '<div class="radio"><label for="' . $candidate['id'] . '"><input name="candidate" value="' . $candidate['id'] . '" type="radio" class="form-control" id="' . $candidate['id'] . '" />' . $candidate['firstname'] . ' ' . $candidate['lastname'] . '</label></div>';
				}
			} else {				
				foreach ($db->query('SELECT id, firstname, lastname, votes FROM candidate') as $candidate) {
					echo '<div class="radio"><label for="' . $candidate['id'] . '"><input name="candidate" value="' . $candidate['id'] . '" type="radio" class="form-control" id="' . $candidate['id'] . '" />' . $candidate['firstname'] . ' ' . $candidate['lastname'] . '</label></div>';
				}
			} ?>
			<strong>Enter Alternate Candidate</strong><br>
			<form class="form-inline">
				<div class="form-group">
					<input type="text" name="third-party-first-name" placeholder="First name" />
					<input type="text" name="third-party-last-name" placeholder="Last name" />
					<select name="third-party-party" class="form-control">
						<option value="Libertarian" name="name">Libertarian</option>
						<option value="Constitutionalist" name="votes">Constitutionalist</option>
						<option value="Socialist" name="party">Socialist</option>
						<option value="Communist" name="id">Communist</option>
					 </select>
					<input class="btn btn-default" type="submit" form="pres-poll" />
				</div>
			</form>
		</form>
	</div>
</div>
<?php require 'dynamic/footer.php'; ?>