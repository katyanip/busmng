<?php
session_start();
include("connl.php");
if(isset($_POST['submit'])){
    $uname=$_POST['user'];
    $pass=$_POST['pass'];
    $sql= "select * from student_record where id = '$uname' and pass = '$pass'";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($res, MYSQLI_ASSOC);
    $count= mysqli_num_rows($res);
    

    if($count==1){
        header("Location:landingpage.html");
        $_SESSION['u']=$uname;
   
    }
    else{
        echo '<script>
        window.location.href="login.php";
        alert("wrong info");
        </script>';
    }
}
?>