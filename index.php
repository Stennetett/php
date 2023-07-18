
<!DOCTYPE html>
<html>
<head>
<title>My First HTML Page</title>
</head>
<body>
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

$query = "SELECT * FROM day_plan";
$result = $mysqli->query($query);

// Check if the query was successful
if ($result) {
    // Loop through the rows and display the data
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Time: " . $row['time'] . "<br>";
        echo "Task: " . $row['task'] . "<br>";
        echo "Description: " . $row['description'] . "<br><br>";
    }

    // Free the result set
    $result->free();
} else {
    echo "Error executing the query: " . $mysqli->error;
}

// Close the MySQLi connection
$mysqli->close();
?>
<h1>This is my first HTML page!</h1>
<p>I'm so excited to be learning HTML.</p>
</body>
</html>

 

