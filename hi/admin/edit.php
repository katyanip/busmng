<?php
 include("connl.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $newEmail = $_POST['email'];

        // Update email in the database
        $sql = "UPDATE reg_res SET bus_no='$newEmail' WHERE reg_id=$id";
        if ($conn->query($sql) === TRUE) {
            echo "bus updated successfully";
        } else {
            echo "Error updating email: " . $conn->error;
        }
    } elseif (isset($_POST['submit2'])) {
        $id = $_POST['id'];

        // Delete row from the database
        $sql = "DELETE FROM reg_res WHERE reg_id=$id";
        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }
}
?>