<!--
Author: Developer tech
Author URL: https://developertechid.blogspot.co.id/
License: Creative Developer tech
License URL: https://developertechid.blogspot.co.id/
-->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/login.css" rel='stylesheet' type='text/css' />
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700|Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body>
    <div class="main">
        <div class="user">
            <img src="images/user.png" alt="">
        </div>
        <!---start-main-->
        <div class="login">
            <div class="inset">
                <form action="cek_log.php" method="POST">
                    <div>
                        <span><label>Username</label></span>
                        <span><input type="text" class="textbox" name="username" autofocus="autofocus"></span>
                    </div>
                    <div>
                        <span><label>Password</label></span>
                        <span><input type="password" name="password" class="password"></span>
                    </div>
                    <hr>
                    <div class="sign">
                        <div class="submit">
                          <input type="submit" value="LOGIN" >
                        </div>
                        <span class="forget-pass">
                            <a href="#">Forgot Password?</a>
                        </span>
                        <div class="clear"> </div>
                    </div>
                </form>
            </div>
        </div>
        <!---//end-main-->
    </div>
</body>
</html>
