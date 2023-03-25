<!DOCTYPE html>
<html>
<head>
	<title>Simple PHP Website</title>
	
</head>
<body>
<?php

$mysqli = new mysqli('localhost', 'debian-sys-maint', 'dmM1hsMuy60U8YtP', 'sys');


//Kontrollerar teckentabell
if (!$mysqli->set_charset("utf8")) {
  echo "Fel vid inställning av teckentabell utf8: %s\n". $mysqli->error;
}
else {
//   // Här kan du skriva ut något om du vill ha en bekräftelse på att det funkar
echo "Nuvarande teckenkodningstabell: %s\n". $mysqli->character_set_name();
}

if ($mysqli->connect_errno) {
  // Om något gått fel skrivs felmeddelande ut
  echo "Misslyckades att ansluta till MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>
	<?php


// Här ska ni formulera en SQL-query som hämtar *alla fält och alla rader* från tabellen film.
$sql = "SELECT * FROM coffie";

// Här körs queryn mot databasen
$result = $mysqli->query($sql);
?>
	<h1>Welcome to my website</h1>
	<p>Today is <?php echo date("Y/m/d"); ?></p>
	<form action="submit-form.php" method="post">
		<label for="name">Name:</label>
		<input type="text" name="name" id="name">
		<br>
		<label for="email">Email:</label>
		<input type="email" name="email" id="email">
		<br>
		<input type="submit" value="Submit">
	</form>
	<?php


while($myRow = $result->fetch_array()) {
   echo "<tr><td>" . $myRow['id'] . "</td><td>" . $myRow['name'] . "</td></tr>\n";
 }
?>
</body>
</html>
