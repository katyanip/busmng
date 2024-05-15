<?php
session_start();
include("connl.php");
if(isset($_POST['submit'])){
    $uname=$_POST['user'];
    $pass=$_POST['pass'];
    $sql= "select * from driver_record where d_id = '$uname' and pass = '$pass'";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($res, MYSQLI_ASSOC);
    $count= mysqli_num_rows($res);
    

    if($count==1){
        header("Location:d_p.php");
        $_SESSION['u']=$uname;
   
    }
    else{
        echo '<script>
        window.location.href="logind.php";
        alert("wrong info");
        </script>';
    }
}
?>