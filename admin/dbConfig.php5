<?php
//Database credentials
$dbHost     = 'localhost';
$dbUsername = 'rashmi';
$dbPassword = 'rashmi@123';
$dbName     = 'sih';

//Connect and select the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>