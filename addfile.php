<?php
    session_start();
    include 'db.php';
    mysqli_select_db($con,"filesharesystem");
    $roomid=$_POST['roomid'];
    $fname=$_POST['fname'];
    $name=$_FILES['files']['name'];
    $type=$_FILES['files']['type'];
    $data=file_get_contents($_FILES['files']['tmp_name']);

    $sql="insert into $roomid (`filename`,`name`,`file`,`data`) values ('$fname','$name','$type','$data')";
    mysqli_query($con,$sql);
    header("location:room_admin.php");

?>