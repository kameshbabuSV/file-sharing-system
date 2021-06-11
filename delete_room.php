<?php
    include 'db.php';
    $adminid = $_POST['adminid'];
    $password = $_POST['password'];
    $roomid = $_POST['roomid'];
    $roomname = $_POST['roomname'];
    if (mysqli_num_rows(mysqli_query($con, "SELECT * FROM registered_rooms WHERE admin_id='$adminid' && password='$password' && room_name='$roomname' &&  room_id='$roomid' ")) > 0) {
        $query1=("delete from registered_rooms where admin_id='$adminid' && password='$password' && room_name='$roomname' && room_id='$roomid' ");
        mysqli_query($con,$query1);
        $query=("drop table $roomid");
        mysqli_query($con,$query);
        header("location:room_admin_delete_room.php?message=Room Deleted Successfully");
       // echo "<script>window.alert(' Room Deleted Successfully.')</script>";
        
    } 
    else{
        header("location:room_admin_delete_room.php?message=Room Not Deleted");
    }

?>