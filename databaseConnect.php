<?php
$conn = mysqli_connect($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], 'testDB', $_SERVER['RDS_PORT']);

// Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
