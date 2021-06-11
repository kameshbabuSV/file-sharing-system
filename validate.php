<?php
        session_start();
        include 'db.php';
        mysqli_select_db($con,"filesharesystem");
        $username=$_POST['username'];
        $password=$_POST['password'];

        if (mysqli_num_rows(mysqli_query($con, "SELECT * FROM users WHERE username='$username' && password='$password'")) > 0) {
            header("location:user.php");
        } 

        else{
            echo"<script>window.alert('The Username and Password Is Incorrect...Enter valid Data')</script>";
       
    }
?>
