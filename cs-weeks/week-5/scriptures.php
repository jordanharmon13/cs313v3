<?php require ('scriptures_db.php'); ?>
<?php require ('../dynamic/header.php');?>

<div>
	<h3>Week 5 Team Activity</h3>
	<div>
		<ul>
			<?php foreach ($db->query('SELECT book, chapter, verse, contetnt FROM scriptures') as $scripture) {
				echo '<li><strong>' . $scripture['book'] . ' ' . $scripture['chapter'] . ':' . $scripture['verse'] . '</strong> <br>' . $scripture['content'] . '<br>' . '</li>';
			}			?>
		</ul>
	</div>
</div>

<?php require ('../dynamic/footer.php');?>
