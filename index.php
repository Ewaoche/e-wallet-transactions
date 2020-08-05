
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width,initial-scale=1">
   
    <link rel="shortcut icon" href="assets/img/favicon-32x32.png">
    <link href="assets/css/login.css" rel="stylesheet" media="screen">
    <link href="assets/css/animate.css" rel="stylesheet" media="screen">
    <link href="assets/css/fonts/icomoon/icomoon.css" rel="stylesheet">
    <title>Login </title>

</head>
<body>
    <form action="operations.php" id="wrapper" method="POST" >
        
        <div id="box" class="animated bounceIn">
            <div id="top_header">
                <h5>Sign in to access to your Profile</h5>
            </div>
            <div id="inputs">
                <div class="form-block">
                    <input type="text" placeholder="User Name" name="username" required>
                </div>
                <div class="form-block">
                    <input type="password" placeholder="Password" name="password" required>
                </div>
                <input type="submit" name="login_btn" value="Sign In">
            </div>
            <div id="bottom" class="clearfix">
                
                <div class="pull-right"><span class="cb-label">Not a Member ?</span>
                <a href="register.php">Register</a>
                </div>
            </div>
        </div>
    </form>
    
</body>