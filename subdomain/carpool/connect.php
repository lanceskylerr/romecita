<?php
// Connect to the database
$host = "localhost";
$username = "u235214907_lance_skyler";
$password = "Lance@15";
$database = "u235219407_lance_carpool";

$conn = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>