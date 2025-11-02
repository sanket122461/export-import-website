<?php
$host = "localhost";      // Database host
$user = "root";           // Database username
$pass = "";               // Database password
$dbname = "export_import"; // Your database name

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Database connection failed: " . $conn->connect_error);
}
?>
