<?php
    include 'db.php';
    $adminid = $_POST['adminid'];
    $password = $_POST['password'];
    $roomid = $_POST['roomid'];
    $roomname = $_POST['roomname'];
    $docname = $_POST['docname'];
    $folder="uploads/";
    if (mysqli_num_rows(mysqli_query($con, "SELECT * FROM registered_rooms WHERE admin_id='$adminid' && password='$password' && room_name='$roomname' &&  room_id='$roomid' ")) > 0) {
        $query=("delete from $roomid where doc_name='$docname' ");
        mysqli_query($con,$query);
        header("location:room_admin_delete_doc.php?message=Deleted Successfully");
        
    }
    else{
        echo "<script>window.alert('No Such Docs.')</script>";
    }
    $sql="select * from $roomid where doc_name='$docname'";
    $query=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($query)){
        unlink($folder.$row['new_name']);
    }

?>
<?php 