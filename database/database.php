<?php
try
{
   $user = 'read_only';
   $password = 'nmw45U9hvApXWFz9'; 
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

$db = new PDO("mysql:host=$dbHost:$dbPort;dbname=$dbName", $dbUser, $dbPassword); 

$method = $_SERVER['REQUEST_METHOD'];
echo "Method" . $method;
if ($method == "POST") {
	if ($_POST['third-party-first-name'] != "" && $_POST['third-party-first-name'] != NULL) {
		$query = "INSERT INTO `candidate` (`firstname`, `lastname`, `votes`, `party`) VALUES (\"" . $_POST['third-party-first-name'] . "\", \"" . $_POST['third-party-last-name'] . "\", 1, \"" . $_POST['third-party-party'] . "\");";
		$db->query($query);
		print_r($db->errorInfo);
	} else {
		$db->query("UPDATE candidate SET votes = votes + 1 WHERE id = " . $_POST['candidate'] . ";");
	}
}