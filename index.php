<!DOCTYPE html>
<html lang="en">

<head>
  <title>game</title>
  <meta charset="UTF-8" />
  <meta name="description" content="Welcome page">
  <link rel="stylesheet" href="design.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Shizuru&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <div id="canvasDiv">
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

  </div>
    <script src="./node_modules/pixi.js/dist/browser/pixi.min.js"></script>
    <script src="./app.js"></script>

 
</body>

</html>
