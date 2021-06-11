<?php
            include 'db.php';
            include 'header.php';
            if(isset($_POST['btn'])){
              $adminid = $_POST['adminid'];
              $password = $_POST['password'];
              $roomname = $_POST['roomname'];
              if (mysqli_num_rows(mysqli_query($con, "select room_id from registered_rooms where room_name='$roomname' AND admin_id='$adminid' AND password='$password'")) <= 0) {
                header("location:forgot_roomid.php?message=Invalid Data");
                //header("Location: index.php?error= Admin ID Already Exists!");
            } 
            else{
              $sql=("select room_id from registered_rooms where room_name='$roomname' AND admin_id='$adminid' AND password='$password' ");
              $query=mysqli_query($con,$sql);
            }
            
            }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Forgot Room Id</title>
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="wrapper">
        <div class="title-text">
            <div class="title login">Your Room Id Is</div>
        </div>
        <table class="table" style="text-align:center">
              <thead class="thead-dark">
              <?php  while($row=mysqli_fetch_array($query)) { ?>
                <tr>
                    <th><?php echo $row['room_id']; ?></th>
                </tr>
                <?php } ?>
            </thead>
</table>
        <div class="form-container">
            <div class="form-inner">
                <form class="login" method="post">
                    <div class="signup_link">
                        <div class="pass"><a class="forgot_pass" style="text-decoration:none;color:#1da6cf;font-size:18px" href="room_admin.php">OK</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>