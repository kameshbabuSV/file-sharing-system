<?php include 'header.php' ?>
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
                 <li class="nav-item">
                 <a class="nav-link" href="room_admin_delete_doc.php">Delete Document</a>
                </li>
                <li class="nav-item">
                 <a class="nav-link" href="room_admin_delete_room.php">Delete Room</a>
                </li>
                <li class="nav-item">
                 <a class="nav-link" href="forgot_roomid.php">Forgot Room ID</a>
                </li>
                <li class="nav-item">
                 <a class="nav-link" href="index.php">Logout</a>
                </li>
            </ul>
          </div>
        </nav> 
<body class="text-center">
<?php
   include 'db.php';
   if(isset($_POST['btn'])){
    $roomid=$_POST['roomid'];
    $docname=$_POST['fname'];
    

    // destination of the file on the server
    $destination = "uploads/";

    $file_new_name = date("dmy").time().$_FILES["files"]["name"];
    $filename = $_FILES["files"]["name"];
    $filetemp = $_FILES["files"]["tmp_name"];
    $filesize = $_FILES["files"]["size"];

    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    

    if (!in_array($extension, ['zip', 'pdf', 'docx','doc','ppt','xlxs','png','jpg'])) {
        echo "You file extension must be .zip, .pdf or .docx or .doc";
    }else {
        // move the uploaded (temporary) file to the specified destination
       $sql ="insert into $roomid (doc_name,name,new_name) values ('$docname','$filename','$file_new_name')";
       $result=mysqli_query($con,$sql);
       if($result){
       move_uploaded_file($filetemp,$destination.$file_new_name);
       echo "<script>window.alert('File uploaded successfully')</script>";
       }
       else{
        echo "<script>window.alert('OOPS....Something went Wrong.File Not Uploaded')</script>";
       }
    }
}
    ?>
    <form class="form-signin" method="post" enctype="multipart/form-data">
      <h1 class="h3 mb-3 font-weight-normal" style="color:#080000;">Add Document</h1>
      <label for="district" class="sr-only">Room ID</label>
      <input type="text" id="name" name="roomid" class="form-control" placeholder="Room ID" required="" autocomplete="off" >
      <label for="district" class="sr-only">Document Name</label>
      <input type="text" id="name" name="fname" class="form-control" placeholder="Document Name" required="" autocomplete="off" >
      <label for="files" class="sr-only">File</label>
      <input type="file" id="files" name="files" class="form-control" required="">   
          
          
      <button class="btn btn-lg btn-dark btn-block" name="btn" style="background-color:#080000" type="submit">ADD</button>
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