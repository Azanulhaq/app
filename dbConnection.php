<?php
$databaseHost = 'app-s.mysql.database.azure.com';
$databaseUsername = 'Azan';
$databasePassword = 'Admin1234567';
$databaseName = 'test';

// Open a new connection to the MySQL server
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
?>
