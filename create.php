<?php
        session_start();
        include 'db.php';
        mysqli_select_db($con,"filesharesystem");
        $roomname=$_POST['rname'];
        $password=$_POST['password'];
        $roomid1=$_POST['roomid'];
        $str='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $roomid2=substr(md5(microtime()),0,6);

        if (mysqli_num_rows(mysqli_query($con, "SELECT * FROM registered_rooms WHERE room_name='$roomname'")) > 0) {
            echo "<script>window.alert('Room Name Already Exist...Please select different one.')</script>";
            //header("Location: index.php?error= Admin ID Already Exists!");
        } 

        else{
       $create="CREATE TABLE $roomid2(
         id int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
         doc_name varchar(255),
         name varchar(255),
         new_name varchar(255)
          )";
        mysqli_query($con,$create);
        $reg="insert into registered_rooms(`room_name`,`password`,`admin_id`,`room_id`) values ('$roomname','$password','$roomid1','$roomid2')";
        mysqli_query($con,$reg);
        
        header("location:index.php?message=ROOM ID IS $roomid2");
       
    }
?>
