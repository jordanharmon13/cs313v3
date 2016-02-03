<?php
try
{
   $user = 'adminnFUPYeR';
   $password = 'NsxAN5RdJg1j'; 
   $db = new PDO('mysql:host=127.0.0.1;dbname=polls_db', $user, $password);
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
$dbName = 'cs313';

echo "host:$dbHost:$dbPort dbName:$dbName user:$dbUser password:$dbPassword<br />\n"; 

$db = new PDO("mysql:host=$dbHost:$dbPort;dbname=$dbName", $dbUser, $dbPassword); 