<?php require('database/database.php') ?>
<?php require 'dynamic/header.php'; ?>

<h1>Polls Application</h1>
<div><p>This is where the polls application will be located. For the moment, we will have this application below to illustrate what I will be creating, but I will be connecting it to my own database.</p></div>

<form method="post" action="http://poll.pollcode.com/44699867">
	<div class="more-outer-form-div">
	<div class="outer-form-div">
		<strong>Who will you vote for in 2016?</strong>
		</div>
			<form>
				<?php foreach ($db->query('SELECT id, firstname, lastname FROM candidate') as $candidate) {
					echo '<input type="radio" class="form-style" id="' . $candidate['id'] . '" /><label for="' . $candidate['id'] . '" style="form-label">' . $candidate['firstname'] . ' ' . $candidate['lastname'] . '</label>';
					echo '<div class="inner-form-div"></div>';
				} ?>
			</form>
		</div>
	</div>
</form>

<?php require 'dynamic/footer.php'; ?>