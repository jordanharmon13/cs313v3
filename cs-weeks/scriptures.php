<?php require ('scriptures_db.php'); ?>
<?php require ('../dynamic/header.php') ?>

<div>
	<h3>Week 5 Team Activity</h3>
	<h4>Scripture Resource</h4>
	<div class="scripture-power">
	<div>
		<form id="search-form" method="get" action="#">
			<label>Book:</label>
			<input type="text" placeholder="Search..." name="book"/>
			<input type="submit" value="Find" form="search-form"/>
		</form>
	</div>
		<ul>
			<?php if ($_GET['book'] != '' && $_GET['book'] != NULL) {
				foreach ($db->query('SELECT book, chapter, verse, content FROM scriptures WHERE book LIKE "%' . $_GET['book'] . '%"') as $scripture);
				echo '<li><strong>' . $scripture['book'] . ' ' . $scripture['chapter'] . ':' . $scripture['verse'] . '</strong> <br>' . '"' . $scripture['content'] . '"' . '<br>' . '</li>';
			} else {
				foreach ($db->query('SELECT book, chapter, verse, content FROM scriptures') as $scripture) {
				echo '<li><strong>' . $scripture['book'] . ' ' . $scripture['chapter'] . ':' . $scripture['verse'] . '</strong> <br>' . '"' .  $scripture['content'] . '"' .  '<br>' . '</li>';
				}	
			}			?>
		</ul>
	</div>
</div>


<?php require ('../dynamic/footer.php') ?>
