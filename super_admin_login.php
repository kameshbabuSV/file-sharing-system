
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Super Admin Login</title>
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="wrapper">
        <div class="title-text">
            <div class="title login">Super Admin Login</div>
        </div>
        <div class="form-container">
            <div class="form-inner">
                <form action="superadminlogin.php" class="login" method="post">

                    <div class="field">
                       <input type="text" placeholder="Admin Username" name="adminname"  required autocomplete="off">
                    </div>  
                    <div class="field">
                        <input type="password" placeholder="Password" name="password" required autocomplete="off">
                    </div>
                    <div class="signup_link">
                        <div class="pass"><a class="forgot_pass" style="text-decoration:none;color:#1da6cf;font-size:18px" href="index.php">Back</a></div>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Enter">
                    </div>
                </form>
               
            </div>
        </div>
    </div>
</body>
</html>