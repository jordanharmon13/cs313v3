<?php

$db = new PDO("mysql:host=jordanz6@localhost;dbname=poll", $user, $pass);
	foreach($db->query('SELECT * from poll') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
var_dump($db);
 ?>