<?php
$servername = "localhost";
$username = "webprogss221";
$password = "=latHen97";
$dbname = "webprogss221";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM kabutalid_myguests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " " . $row["id"]. " " . $row["name"]. " " . $row["email"]. " " . $row["website"]. " " . $row["comment"]. " " . $row["gender"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>