<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $busNumber = $_POST["busNumber"];
    // Save the bus number to your database or perform other actions
    // (e.g., update a table with allocated bus numbers)
    // Redirect back to the admin page or show a success message
    header("Location: admin.php");
    exit;
}
?>
