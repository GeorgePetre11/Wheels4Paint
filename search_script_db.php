<!DOCTYPE html>
<html>

<body>
    <h1>Wheels4Paint Database Search</h1>
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
    

    <!-- Search Form -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Search by First Name: <input type="text" name="search_first_name">
        <input type="submit" value="Search">
    </form>

    <br> Database search result: <br><br>
    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $search_first_name = isset($_POST["search_first_name"]) ? mysqli_real_escape_string($connection, $_POST["search_first_name"]) : '';

        // Perform a parameterized query to prevent SQL injection
        $database_query = "SELECT * FROM WheelOrders WHERE first_name LIKE '%$search_first_name%'";
        $query_result = mysqli_query($connection, $database_query);

        if (!$query_result) {
            die("Query error to database: " . mysqli_error($connection));
        }

        if (mysqli_num_rows($query_result) > 0) {
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
        } else {
            echo "No entry with this name found. Try again.";
        }
    }

    mysqli_close($connection);
    ?>
</body>
<button onclick="location.href='admin_page.php'">Go back to the admin page</button>

</html>
