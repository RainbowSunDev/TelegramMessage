<?php
require('env.php');

// Create connection
$conn = new mysqli($SERVER_NAME, $USERNAME, $PASSWORD, $DB_NAME);
print_r($conn);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected to MySQL successfully";
?>