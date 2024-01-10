<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wheels4Paint</title>

    <style>
        .navbar {
            background-color: #000000;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .navbar a:hover {
            background-color: #ffffff;
            color: black;
        }

        .active {
            background-color: #ffd900;
            color: white;
        }
    </style>
</head>

<body style="background-color: ##FFFFFF ;">
    <center>
        <div>
            <div class="navbar">
                <a href="homewheels.html">Home</a>
                <a href="products.html">Products</a>
                <a href="about_us.html">About Us</a>
                <a class="active">Order!</a>
                <a href="login.php">Login page for Admin</a>
            </div>
        </div>
    </center>
    <center>
        <h1>Order your wheels:</h1>
    </center>
    <form action="form_script_database.php" method='POST'>
        <label for="first_name">Your first name:</label>
        <br>
        <input type="text" id="first_name" name="first_name" required minlength="1" maxlength="10" size="10">
        <br>
        <label for="last_name">Your last name:</label>
        <br>
        <input type="text" id="last_name" name="last_name" required minlength="1" maxlength="10" size="10">
        <br>

        <label for="email">Enter your email:</label>
        <br>
        <input type="text" id="email" name="email" size="40">
        <br>
        <h3>Choose the wheels' size:</h3>
        <input type="radio" id="16" name="wheel_size" value="16" checked>
        <label for="16">16"</label>
        <br>
        <input type="radio" id="17" name="wheel_size" value="17" checked>
        <label for="17">17"</label>
        <br>
        <input type="radio" id="18" name="wheel_size" value="18" checked>
        <label for="18">18"</label>

        <h3>Choose the wheels' material:</h3>
        <input type="radio" id="Alloy" name="wheel_material" value="Alloy" checked>
        <label for="Alloy">Alloy"</label>
        <br>
        <input type="radio" id="Steel" name="wheel_material" value="Steel" checked>
        <label for="Steel">Steel"</label>
        <br>
        <h3>Choose the color of your wheels:</h3>
        <input type="radio" id="MatteBlack" name="wheel_color" value="Matte Black" checked>
        <label for="MatteBlack">Matte Black</label>
        <br>
        <input type="radio" id="PianoBlack" name="wheel_color" value="Piano Black">
        <label for="PianoBlack">Piano Black</label>
        <br>
        <input type="radio" id="Titan" name="wheel_color" value="Titan">
        <label for="Titan">Titan</label>
        <br>
        <input type="radio" id="MatteCarbon" name="wheel_color" value="Matte Carbon">
        <label for="MatteCarbon">Matte Carbon</label>
        <br>
        <input type="radio" id="OrangeWheel" name="wheel_color" value="Orange Wheel">
        <label for="OrangeWheel">Orange Wheel</label>
        <br>
        <input type="radio" id="PinkWheel" name="wheel_color" value="Pink Wheel">
        <label for="PinkWheel">Pink Wheel</label>
        <br>
        <input type="radio" id="LightBlue" name="wheel_color" value="Light Blue">
        <label for="LightBlue">Light Blue</label>
        <br>
        <input type="radio" id="DarkGreen" name="wheel_color" value="Dark Green">
        <label for="DarkGreen">Dark Green</label>
        <br>
        <h3>Choose Fast Shipment (additional price: 5$):</h3>
        <input type="radio" id="YesShipment" name="fast_shipment" value="Yes" checked>
        <label for="YesShipment">Yes</label>
        <br>
        <input type="radio" id="NoShipment" name="fast_shipment" value="No">
        <label for="NoShipment">No</label>
        <br>
        <br>
        <input type="submit" value="Submit the data">
    </form>
</body>

</html>
