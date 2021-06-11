
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="wrapper">
        <div class="title-text">
            <div class="title login">Create Room</div>
            <div class="title signup">Join Room</div>
        </div>
        <div class="form-container">
           <div class="slide-controls">
                <input type="radio" name="slide" id="login" checked>
                <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Create</label>
                <label for="signup" class="slide signup">Join</label>
                <div class="slider-tab">
                </div>
            </div>
            <div class="form-inner">
                <form action="create.php" class="login" method="post">
                    <div class="field">
                       <input type="text"  placeholder="Room Name" name="rname" required autocomplete="off" onfocus="document.getElementById('message').style.display='none';">
                    </div>

                    <div class="field">
                       <input type="text" placeholder="Admin Id" name="roomid" required autocomplete="off">
                    </div>  
                    <div class="field">
                        <input type="password" placeholder="Password" name="password" required autocomplete="off">
                    </div>
                    
                    <div class="signup_link">
                        <div class="pass"><a class="" style="text-decoration:none;color: #1da6cf;font-size:18px" href="room_admin_login.php">Room Admin Login</a></div>
                    </div>
                    <div class="signup_link">
                        <div class="pass"><a class="" style="text-decoration:none;color: #1da6cf;font-size:18px" href="super_admin_login.php">Super Admin Login</a></div>
                    </div>
                    <?php if (isset($_GET["message"])) { ?>
                             <span class="text-success mt-1" id="message"><?php echo $_GET["message"]; ?></span>
                            
                    <?php } ?>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Create">
                    </div>
                </form>
               <form action="validate.php" method="post" class="signup">
                   
                    <!--<div class="results">
                   
                    <div class="alert alert-danger">
                    
                    </div>
                    
                    </div>-->
                    <div class="field">
                        <input type="text" placeholder="Username" name="username" required autocomplete="off">
                    </div>
                    <div class="field">
                        <input type="date" placeholder="Password" name="password" required autocomplete="off">
                    </div>
                    
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Enter">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        const loginText = document.querySelector(".title-text .login");
        const loginForm = document.querySelector("form.login");
        const loginBtn = document.querySelector("label.login");
        const signupBtn = document.querySelector("label.signup");
        const signupLink = document.querySelector("form .signup-link a");
        signupBtn.onclick = (()=>{
            loginForm.style.marginLeft = "-50%";
            loginText.style.marginLeft = "-50%";
        });
        loginBtn.onclick = (()=>{
            loginForm.style.marginLeft = "0%";
            loginText.style.marginLeft = "0%";
        });
        signupLink.onclick = (()=>{
            signupBtn.click();
            return false;
        });
    </script>
</body>
</html>