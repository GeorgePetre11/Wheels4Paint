<?php
session_start();

// Check if the user is logged in as an admin
if (!isset($_SESSION["is_admin"]) || $_SESSION["is_admin"] !== true) {
    // Redirect non-admin users to the login page
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>

<h2>Welcome, Admin!</h2>
<p>This is the admin page content.</p>

<!-- Buttons for special actions -->
<button onclick="location.href='search_script_db.php'">Search Database</button>
<button onclick="location.href='index_delete.php'">Delete Entry</button>
<button onclick="location.href='script_insert.php'">Insert entry</button>
<button onclick="location.href='homewheels.html'">Go back to the website</button>



</body>
</html>
