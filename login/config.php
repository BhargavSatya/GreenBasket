
<?php

/* Database credentials. Assuming you are running MySQL

server with default setting (user 'root' with no password) */

$DB_SERVER = "localhost";

$DB_USERNAME = "root";

$DB_PASSWORD = "gyeyosi";

$DB_NAME = "test";



/* Attempt to connect to MySQL database */

$link = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

// Check connection

if($link === false){

die("ERROR: Could not connect. " . mysqli_connect_error());

}

?>


