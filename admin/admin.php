
<!DOCTYPE HTML>
<html>
<head>
  <title>Admin Form</title>
  <link rel="stylesheet" type="text/css" href="../admin/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">

</head>
<body>
<ul>
  <li><a href="../login.php">User Login</a></li>
  <li style="float:left"></li>
</ul>
  <div class="form-box">
  <p> Admin Login</p>
 <form action="../admin/loginprocess.php" method="POST">
    <div class=text-box>
    <input  type="text" id="user"  name="username" placeholder="EnterUsername" required><br>
  </div>
    <div class="text-box">
    <input type="password" id="pass"  name="password" placeholder="EnterPassword" required><br>
  </div>
  <button class="login_user" name="login_user" type="submit">Log In</button>
 </form>
</div>
</body>
</html>