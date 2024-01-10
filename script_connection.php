<?php
$servername = "localhost";
$username = "studentuser";
$password = "1234";
$databasename = "clientdb";
// Create connection
$connection = mysqli_connect($servername, $username, $password);

// Check connection
if (!$connection) {
  die("Failed connection: " . mysqli_connect_error());
}
echo "Successfully connected to database: $databasename";
?>

<html>
	<head>
	</head>
	<body>
	<br><br>This is the PHP script that establishes a connection to the database <br><br>
	</body>
</html>
