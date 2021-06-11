
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="wrapper">
        <div class="title-text">
            <div class="title login">Room Admin Login</div>
            <!--<div class="title signup">Join Room</div>-->
        </div>
        <div class="form-container">
           <!--<div class="slide-controls">
                <input type="radio" name="slide" id="login" checked>
                <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Create</label>
                <label for="signup" class="slide signup">Join</label>
                <div class="slider-tab">
                </div>
            </div>-->
            <div class="form-inner">
                <form action="roomadminlogin.php" class="login" method="post">

                    <div class="field">
                       <input type="text" placeholder="Admin Id" name="adminid" required autocomplete="off">
                    </div>  
                    <div class="field">
                        <input type="password" placeholder="Password" name="password" required>
                    </div>
                    <div class="signup_link">
                        <div class="pass"><a class="forgot_pass" style="text-decoration:none;color:#1da6cf;font-size:18px" href="index.php">Back</a></div>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Enter">
                    </div>
                </form>
               <!--<form action="" method="post" class="signup">
                   
                    <div class="results">
                   
                    <div class="alert alert-danger">
                    
                    </div>
                    
                    </div>
                    <div class="field">
                        <input type="number" placeholder="Room Id" name="rid" pattern="[0-9]{6}" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Password" name="password" required>
                    </div>
                    
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Enter">
                    </div>
                </form>-->
            </div>
        </div>
    </div>
   <!--<script>
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
    </script>-->
</body>
</html>