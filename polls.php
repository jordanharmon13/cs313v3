<?php require('database/database.php') ?>
<?php require 'dynamic/header.php'; ?>

<h1>Polls Application</h1>
<div><p>This is where the polls application will be located. For the moment, we will have this application below to illustrate what I will be creating, but I will be connecting it to my own database.</p></div>

<form method="post" action="http://poll.pollcode.com/44699867">
	<div class="more-outer-form-div">
	<div class="outer-form-div">
		<strong>Who will you vote for in 2016?</strong>
		</div class="more-outer-form-div">
			<form id="pres-poll" method="post" action="polls.php">
				<?php foreach ($db->query('SELECT id, firstname, lastname, votes FROM candidate') as $candidate) {
					echo '<input name="candidate" value="' . $candidate['id'] . '" type="radio" class="form-style" id="' . $candidate['id'] . '" /><label for="' . $candidate['id'] . '" style="form-label">' . $candidate['firstname'] . ' ' . $candidate['lastname'] . '</label>';
					echo '<div class="inner-form-div"></div>';
				} ?>
				<input type="submit" form="pres-poll" />
			</form>
		</div>
	</div>
</form>

<?php require 'dynamic/footer.php'; ?>