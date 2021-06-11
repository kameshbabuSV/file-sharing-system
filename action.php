<?php
            include 'db.php';
            include 'header.php';
            if(isset($_POST['btn'])){
              $roomid = $_POST['roomid'];
              if(mysqli_num_rows(mysqli_query($con,"select room_id from registered_rooms where room_id='$roomid' "))>0){
              $sql="select * from $roomid";
              $query=mysqli_query($con,$sql);
              }
              else{
                header("location:user.php?message=No Such Rooms");
              }
            }
?>

<nav class="navbar navbar-expand-md navbar-dark" style="background-color:#1da6cf;">
          <a class="navbar-brand" style="color:#fff;font-weight:bold" href="">USER</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-collapse collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                 <a class="nav-link" href="user.php">Back</a>
                </li>
          </ul>
          </div>
        </nav> 
        <br><br>
<table class="table" style="text-align:center">
              <thead class="thead-dark">
                <tr>
                    <th>DOC NAME</th>
                    <th>DOWNLOAD</th>
                </tr>
            </thead>
            <tbody>
            <?php  while($row=mysqli_fetch_array($query)) { ?>
            <tr>
                 <td><?php echo $row['name']; ?></td>
                 <td><a href="uploads/<?php echo $row['new_name']; ?>">download</a></td>
             </tr>
             <?php } ?>
            </tbody>
</table>
<script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> 