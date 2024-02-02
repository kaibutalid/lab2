<?php
$servername = "localhost";
$username = "root";
$password = "knjpjmjhs";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Questions (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
fullName VARCHAR(80) NOT NULL,
email VARCHAR(50),
question VARCHAR(250),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Questions created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>