<?php
$servername = "localhost";
$username = "malik";
$password = "malik123";
$dbname = "db_inventory";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";