<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
$servername = "localhost";
$username = "newuser";
$password = "HxvRvyZsSA4h4RA@";
// Create connection
$conn = new mysqli($servername, $username, $password, "sys");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, first_name, last_name FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Name</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["first_name"]." ".$row["last_name"].>
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
