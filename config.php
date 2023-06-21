<?php
$host = "pld110.truehost.cloud"; // Database host
$username = "quizwift_muiz"; // Database username
$password = "Adeniyi20#"; // Database password
$database = "quizwift_contact_form"; // Database name

// Create a new MySQLi connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
