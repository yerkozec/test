<?php //Sample Database Connection Syntax for PHP and MySQL.
//Connect To Database
$hostname="localhost";
$username="root";
$password="Yizs150394";
$dbname="concremag";

// Create connection
$DB_con = mysqli_connect($hostname, $username, $password, $dbname);

// Check connection
if (!$DB_con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>