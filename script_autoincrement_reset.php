<?php
$servername = "localhost";
$username = "studentuser";
$password = "1234";
$databasename = "Wheels4Paint";
$connection = mysqli_connect($servername, $username, $password);
if (!$connection) {
  die("Failed connection: " . mysqli_connect_error());
}
echo "Successfully connected to database: $databasename";
?>
<html>
        <head>
        </head>
        <body>
        <br><br>This PHP resets the auto-increment after deleting entries <br><br>
        <?php

        $database_query = "ALTER TABLE clientdb.infoid AUTO_INCREMENT=1" ;
        mysqli_query($connection, $database_query) or die ("Querry error to database: $databasename ");

        mysqli_close($connection);
        ?>
        </body>
</html>




