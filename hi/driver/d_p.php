<?php
session_start();
include('connd.php');
$value=$_SESSION['u'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="st.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <a href="#" class="logo">Driver</a>
        <nav class="nav-items">
          <a href="logind.php">Back to login page</a>
          <a href="#">About</a>
          <a href="#"></a>
        </nav>
      </header>
      <main>
        <div class="intro">
        <?php
                $sql = "select d_name from driver_record where d_id = '$value'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $valuee = $row['d_name'];                
                echo "<h1>Welcome $valuee </h1>";
                ?>
          <center>
          <a href="map.html" class="button">Share Location</a>
          </center>
        </div>
        
      </main>
</body>
</html>