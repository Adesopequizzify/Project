<?php
// Establish a database connection
$host = 'pld110.truehost.cloud';
$dbName = 'quizwift_contact_form';
$username = 'quizwift_muiz';
$password = 'Adeniyi20#';

try {
  $db = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die('Database connection failed: ' . $e->getMessage());
}

// Sanitize and validate form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insert form data into the database
$query = "INSERT INTO contact_messages (name, email, message) VALUES (:name, :email, :message)";
$stmt = $db->prepare($query);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':message', $message);

if ($stmt->execute()) {
  echo "success";
} else {
  echo "error";
}
?>
