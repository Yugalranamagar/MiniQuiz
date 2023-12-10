
<?php include('server.php');
 ?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Login Form</title>
  <link rel="stylesheet" type="text/css" href="css/style1.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">

</head>
<body>
<ul>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a  href="registration.php">Register</a></li>
  <li><a  href="admin/admin.php">Admin Login</a></li>
  <li class="H1">MINI-QUIZ</li>
  <li style="float:left"></li>
</ul>
  <div class="form-box">
 <form action="server.php" method="POST">
 <?php include('errors.php'); ?>
    <div class=text-box>
    <input  type="text" id="user"  name="username" placeholder="EnterUsername" required><br>
  </div>
    <div class="text-box">
    <input type="password" id="pass"  name="password" placeholder="EnterPassword" required><br>
  </div>
  <button class="login_user" name="login_user" type="submit">Log In</button>
  <p>Don't have an account? <a class="text-1" href="registration.php">Sign up now.</a></p>
 </form>
</div>
<div>
  <p class="copy">Copyright©2021   All rights Reserved</p>
</div>
<iframe scrolling="no"  frameborder="0" marginwidth="0" marginheight="0" allowtransparency="true" src="https://www.ashesh.com.np/linknepali-time.php?time_only=no&font_color=333333&aj_time=yes&font_size=14&line_brake=0&bikram_sambat=0&api=281048l035" width="308" height="22"></iframe>
</body>
</html>