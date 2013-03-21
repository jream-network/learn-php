<?php
// PHP: Prepared

require 'connection.php';

$sql = "INSERT INTO phone (name) VALUES(:name)";

$stmt = $dbh->prepare($sql);
$stmt->execute(['name' => 'Udemy']);
echo $dbh->lastInsertId();

