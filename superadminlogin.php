<?php
    session_start();
    include 'db.php';
    mysqli_select_db($con,"filesharesystem");
    $adminid=$_POST['adminname'];
    $password=$_POST['password'];
    if (mysqli_num_rows(mysqli_query($con, "SELECT * FROM super_admin WHERE username ='$adminid' &&  password ='$password'")) > 0) {
        header("location:super_admin.php");
    } 
    else{
        echo "<script>window.alert('Invalid Details...')</script>";
    }
?>