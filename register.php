

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width,initial-scale=1">

<link rel="shortcut icon" href="assets/img/favicon-32x32.png">
<link href="assets/css/login.css" rel="stylesheet" media="screen">
<link href="assets/css/animate.css" rel="stylesheet" media="screen">
<link href="assets/css/fonts/icomoon/icomoon.css" rel="stylesheet">
<title>Register </title>
</head>
<body>
<body>
    <form action="operations.php" id="wrapper" method="POST" >
        
        <div id="box" class="animated bounceIn">
            <div id="top_header">
                <h5>Register your Profile</h5>
            </div>
            <div id="inputs">
               
                <div class="form-block">
                    <input type="text" placeholder="User Name" name="username" required>
                </div>
                <div class="form-block">
                    <input type="password" placeholder="Choose Password" name="password" required>
                </div>
                <div class="form-block">
                    <input type="text" placeholder="First Name" name="firstname" required>
                </div>
                <div class="form-block">
                    <input type="text" placeholder="Last Name" name="lastname" required>
                </div>
                <div class="form-block">
                    <input type="text" placeholder="Phone Number" name="phone" required>
                </div>
                <div class="form-block">
                    <input type="text" placeholder="Email Address" name="email" required>
                </div>
                <input type="submit" name="submit_btn" value="Sign Up">
            </div>
            <div id="bottom" class="clearfix">
                
                <div class="pull-right"><span class="cb-label">Already a Member ?</span>
                <a href="index.php">Sign In</a>
                </div>
            </div>
        </div>
    </form>
    
    </body>
</body>
</html>
