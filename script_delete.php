<?php
$servername = "localhost";
$username = "studentuser";
$password = "1234";
$databasename = "Wheels4Paint";
$connection = mysqli_connect($servername, $username, $password, $databasename);
if (!$connection) {
    die("Failed connection: " . mysqli_connect_error());
}
echo "Successfully connected to database: $databasename";
?>

<html>

<head>
</head>

<body>
    <br><br>This PHP script deletes entries from the database <br><br>
    <?php

    $database_query = "DELETE FROM WheelOrders WHERE first_name='$_POST[first_name]'";
    mysqli_query($connection, $database_query) or die("Query error to database: $databasename ");

    $database_query = "SELECT * FROM WheelOrders";
    mysqli_query($connection, $database_query) or die("Query error to database: $databasename ");
    $query_result = mysqli_query($connection, $database_query);
    while ($line = mysqli_fetch_array($query_result)) {
        echo "Order ID: " . $line['id'] . '<br>';
        echo "Customer Name: " . $line['first_name'] . ' ' . $line['last_name'] . '<br>';
        echo "Email: " . $line['email'] . '<br>';
        echo "Wheel Size: " . $line['wheel_size'] . '<br>';
        echo "Wheel Material: " . $line['wheel_material'] . '<br>';
        echo "Wheel Color: " . $line['wheel_color'] . '<br>';
        echo "Fast Shipment: " . $line['fast_shipment'] . '<br>';
        echo '<hr>';
    }
    mysqli_close($connection);
    ?>
</body>

<button onclick="location.href='admin_page.php'">Go back to the admin page</button>

</html>
