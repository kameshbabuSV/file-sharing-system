<?php
    session_start();
    include 'db.php';
    mysqli_select_db($con,"filesharesystem");
    $username=$_POST['username'];
    $password=$_POST['date'];
        $reg="insert into users (`username`,`password`) values ('$username','$password')";
        mysqli_query($con,$reg);
        header("location:super_admin.php?message=Added Successfully");
   
        
?>