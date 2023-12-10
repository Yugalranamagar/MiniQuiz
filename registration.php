<?php include('server.php')?>
<html>
<link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style2.css">
     <body>
        <div class="container">
        <p>Registration Form</p>
        <form action="#" method="POST">
            <?php include('errors.php'); ?>
    <div class="box_1">
    <input type="text" name="username" placeholder="Enter Username" value="<?php echo $username;?>">
    </div>
    <div class="box_1">
    <input type="email" name="email" placeholder="Enter Email " value="<?php echo $email; ?>">
    </div>
    <div class="box_1">
    <input type="password" name="password_1" placeholder="Enter Password"><br>
    </div>
    <div class="box_1">
    <input type="password" name="password_2" placeholder="Re-Enter Password"><br>
    </div>
    <div class="box_2">
    <button class="reg" name="reg_user">Register</button>
    </div>
    <p>
  		Already a member? <a class="text-1"href="login.php">Sign in</a>
  	</p>
</form>
</div>
   </body>
   </html>

