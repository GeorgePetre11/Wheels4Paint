<?php
$servername = "localhost";
$username = "studentuser";
$password = "1234";
$databasename = "clientdb";
$database_connection = new mysqli($servername, $username, $password, $databasename);
if ($database_connection->connect_error) {
	die("Faileddd connecttttion tttttttttto database: $databasename --- ". $database_connection->connect_error);
}
echo "Successfully connected to database: $databasename";?>
<html>
	<head>
	</head>
	<body>

	<br><br>This is the PHP script that establishes a connection to the database <br><br>

	</body>
</html>
