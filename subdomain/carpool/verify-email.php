<?php

$servername = "localhost";

$username = "u235214907_lance_skyler";
$password = "Lance@15";
$database = "u235219407_lance_carpool";

$conn = new mysqli($servername, $username, $password, $dbname);

$email = $_GET['email'];

$stmt = $conn->prepare("UPDATE userstbl SET user_confirmation = 1 WHERE user_email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->close();

$conn->close();

header('Location: index.php');
exit;