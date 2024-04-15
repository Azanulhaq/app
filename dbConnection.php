<?php
$databaseHost = 'crud-s.mysql.database.azure.com';
$databaseUsername = 'CrudAdmin';
$databasePassword = 'Admin1234567';
$databaseName = 'test';

// Open a new connection to the MySQL server
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
?>
