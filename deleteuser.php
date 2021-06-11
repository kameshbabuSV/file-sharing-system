<?php
    session_start();
    include 'db.php';
    mysqli_select_db($con,"filesharesystem");
    $username=$_POST['username'];
    $password=$_POST['date'];
        $reg="delete from users where username='$username' && password='$password'";
        mysqli_query($con,$reg);
        //echo "<script>window.alert('Deleted Successfully')</script>";
        header("location:super_admin_delete.php?message=Deleted Successfully");
   
        
?>