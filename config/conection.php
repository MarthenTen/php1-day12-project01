<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "day12_project01";

// Create connection
$connection = new mysqli($hostname, $username, $password,$database);

// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
?>