<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Room Admin</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      
      <style>
          form{
              position: absolute;
              width:400px;
              left:50%;
              margin-top:40px;
              transform:translate(-50%,40px);
          }
          input{
              margin-bottom:15px;
          }
          </style>
   </head>
   <nav class="navbar navbar-expand-md navbar-dark" style="background-color:#1da6cf;">
          <a class="navbar-brand" style="color:#fff;font-weight:bold" href="">Room Admin</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-collapse collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                 <a class="nav-link" href="forgot_roomid.php">Forgot Room ID</a>
                </li>
                <li class="nav-item">
                 <a class="nav-link" href="room_admin.php">Back</a>
                </li>
          </ul>
          </div>
        </nav> 
<body class="text-center">
    <form action="forgot.php" class="form-signin" method="post">
      <h1 class="h3 mb-3 font-weight-normal" style="color:#080000;">Find Room Id</h1>
      <label for="adminid" class="sr-only">Admin ID</label>
      <input type="text" id="name" name="adminid" class="form-control" placeholder="Admin ID" required="" autocomplete="off" onfocus="document.getElementById('message').style.display='none';">
      <label for="password" class="sr-only">Password</label>
      <input type="password" id="name" name="password" class="form-control" placeholder="Password" required="" autocomplete="off" onfocus="document.getElementById('message').style.display='none';">
      <label for="roomname" class="sr-only">Room Name</label>
      <input type="text" id="roomname" name="roomname" class="form-control" placeholder="Room Name" required="" autocomplete="off" onfocus="document.getElementById('message').style.display='none';">   
          
      <?php if (isset($_GET["message"])) { ?>
                             <span class="text-danger mt-1" id="message"><?php echo $_GET["message"]; ?></span>
                            
                    <?php } ?> 
      <button class="btn btn-lg btn-dark btn-block" name="btn" style="background-color:#080000" type="submit">FIND</button>
    </form>
    <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>  

</body>