<?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "professor";

$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn){
die("Alguma coisa errada");
}
// Create database
$sql = "CREATE DATABASE IF NOT EXISTS test_db";
    if (mysqli_query($conn, $sql)) {
    echo "Database created successfully<br>";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}
?>