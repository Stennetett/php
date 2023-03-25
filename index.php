<!DOCTYPE html>
<html>
<head>
	<title>Simple PHP Website</title>
</head>
<body>
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
</body>
</html>
