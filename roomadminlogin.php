<?php
    session_start();
    include 'db.php';
    mysqli_select_db($con,"filesharesystem");
    $adminid=$_POST['adminid'];
    $pass=$_POST['password'];
    if (mysqli_num_rows(mysqli_query($con, "SELECT * FROM registered_rooms WHERE admin_id ='$adminid' &&  password ='$pass'")) > 0) {
        $reg="select * registered_rooms where admin_id='$adminid' and password='$password'";
        mysqli_query($con,$reg);
        header("location:room_admin.php");
    } 
    else{
        echo "<script>window.alert('Room id and Password do not match or exist...Check your room id and password')</script>";
    }
?>