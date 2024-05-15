<?php 
session_start();
include("connl.php");
$value=$_SESSION['u'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Bus Registration</title>
    <link rel="stylesheet" href="reg.css">
</head>
<body>
    <div class="container">
        <h1>College Bus Registration</h1>
        <form action="#">
            <div class="form-group">
                <label for="name">Full Name</label>
                <?php
                $sql = "select name from student_record where id = '$value'";

                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $valuee = $row['name'];                
                echo "<input type='text' id='name' name='name' value= '$valuee' required>";
                ?>
            </div>
            <div class="form-group">
                <label for="roll">Roll Number</label>
                <?php             
                echo "<input type='text' id='roll' name='roll' value= '$value' required>";
                ?>
            </div>
            <div class="form-group">
                <label for="course">Course</label>
                <?php
                $sql = "select course from student_record where id = '$value'";

                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $valuee = $row['course'];                
                echo "<input type='text' id='cou' name='cou' value= '$valuee' required>";
                ?>
            </div>
            <div class="form-group">
                <label for="year">Year</label>
                <?php
                $sql = "select year from student_record where id = '$value'";

                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $valuee = $row['year'];                
                echo "<input type='text' id='year' name='year' value= '$valuee' required>";
                ?>
            </div>
            <div class="form-group">
                <label for="Contact Number">Contact Number</label>
                <?php
                $sql = "select contact from student_record where id = '$value'";

                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $valuee = $row['contact'];                
                echo "<input type='text' id='num' name='num' value= '$valuee' required>";
                ?>
            </div>
            <div class="form-group">
                <label for="payment">Payment Method</label>
                <select id="payment" name="payment" required>
                    <option value="">Select Payment Method</option>
                    <option value="credit">Credit Card</option>
                    <option value="debit">Debit Card</option>
                    <option value="paypal">PayPal</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <button type="submit">Register</button>
        </form>
       
    </div>
</body>
</html>
