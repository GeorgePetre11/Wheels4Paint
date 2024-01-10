<!DOCTYPE html>
<html>
<body>
    <h1>Wheels4Paint Order Summary</h1>
    <br><br>

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
    <br>

    <?php
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $wheel_size = $_POST["wheel_size"];
    $wheel_material = $_POST["wheel_material"];
    $wheel_color = $_POST["wheel_color"];
    $fast_shipment = isset($_POST["fast_shipment"]) && $_POST["fast_shipment"] == "Yes" ? 1 : 0;

	$database_query = "INSERT INTO WheelOrders (first_name, last_name, email, wheel_size, wheel_material, wheel_color, fast_shipment) 
                   VALUES ('$first_name', '$last_name', '$email', '$wheel_size', '$wheel_material', '$wheel_color', $fast_shipment)";


    mysqli_query($connection, $database_query) or die("Query error to database: $databasename");
    ?>
    <br>

    <?php
    $database_query = "SELECT * FROM WheelOrders";
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
</html>
