<?php
try
{
   $user = 'adminnFUPYeR';
   $password = 'NsxAN5RdJg1j'; 
   $db = new PDO('mysql:host=127.11.153.130:3306;dbname=cs313', $user, $password);
}
catch (PDOException $ex) 
{
   echo 'Error!: ' . $ex->getMessage();
   die(); 
}

$dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST'); 
$dbPort = getenv('OPENSHIFT_MYSQL_DB_PORT'); 
$dbUser = getenv('OPENSHIFT_MYSQL_DB_USERNAME'); 
$dbPassword = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
$dbName = 'polls_db';

$db = new PDO("mysql:host=$dbHost:$dbPort;dbname=$dbName", $dbUser, $dbPassword); ?>

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
					echo '<li><strong>' . $camdodate['firstname'] . ' ' . $candidate['lastname'] . ':' . '</strong> <br>' . '<br>' . '</li>';
				}
			} else {
				foreach ($db->query('SELECT firstname, lastname FROM candidate WHERE candidate LIKE "%' . $_GET['candidate'] . '%"') as $candidate) {
					echo '<li><strong>' . $camdodate['firstname'] . ' ' . $candidate['lastname'] . ':' . '</strong> <br>' . '<br>' . '</li>';
				}
			}			?>
		</ul>
	</div>
</div>


<?php require ('../dynamic/footer.php') ?>
