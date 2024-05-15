<?php
 include("connl.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Management Admin</title>
    <link rel="stylesheet" href="as.css"> 
</head>
<body>
<header>
        <nav>
            <div class="container1">
                <ul>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>
        </nav>
    </header>
<div class="container">
        <h1>ADMIN PANNEL</h1>

    <div class="container">
        <h1>College Bus Registration</h1>
        <form action="#">
        <h1>Admin Page</h1>
        <table>
            <thead>
                <tr>
                    <th>REGID</th>
                    <th>STUDENTID</th>
                    <th>BUSNO</th>
                </tr>
            </thead>
            <tbody>
                <?php
               
                
                // Query to fetch records
                $sql = "SELECT * FROM reg_rec";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    
                    while($row = $result->fetch_assoc()) {

                        echo "<tr>";
                        echo "<td>".$row["reg_id"]."</td>";
                        echo "<td>".$row["id"]."</td>";
                        echo "<td>".$row["bus_no"]."</td>";
                        echo "<td>";
                        echo "<form method='post' style='display:inline; '>";
                        echo "<input type='hidden' name='id' value='".$row["reg_id"]."'>";
                        echo "<input type='text' name='email' placeholder='New bus number'>";
                        echo "<button type='submit' name='submit'>Edit Busnum</button>";
                        echo "<input type='hidden' name='edit_email'>";
                        echo "</form>";
                        echo "<form method='post' style='display:inline;'>";
                        echo "<input type='hidden' name='id' value='".$row["reg_id"]."'>";
                        echo "<input type='hidden' name='delete_row'>";
                        echo "<button type='submit' name='submit2'>Delete</button>";
                        echo "</form>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "0 results";
                }
               
 include("connl.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['edit_email'])){
        $id = $_POST['id'];
        $newEmail = $_POST['email'];

        // Update email in the database
        $sql = "UPDATE reg_rec SET bus_no='$newEmail' WHERE reg_id=$id";
        if ($conn->query($sql) === TRUE) {
            echo "bus updated successfully";
        } else {
            echo "Error updating email: " . $conn->error;
        }
    } 
    elseif (isset($_POST['delete_row'])) {
        $id = $_POST['id'];

        // Delete row from the database
        $sql = "DELETE FROM reg_rec WHERE reg_id=$id";
        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }
}

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
    </div>
   
</body>
</html>
