<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "project";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE register set id='" . $_POST['id'] . "', username='" . $_POST['username'] . "',email='" . $_POST['email'] ."' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM register WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update User Data</title>
<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body id="page1">
<form name="" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<a  class="b-1" href="userlist.php">Check here to see the Modify User Detail</a><br>
<div class="container-1" style="padding-bottom:5px;">
User's id<br>
<input class="btn-1"type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<input  class="btn-1" type="text" name="id"  value="<?php echo $row['id']; ?>">
<br>
Username<br>
<input  class="btn-1" type="text" name="username" class="txtField" value="<?php echo $row['username']; ?>">
<br>
Email<br>
<input  class="btn-1" type="Email" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br>
<input type="submit" name="submit" value="Modify" class="buttom">
</div>

</form>
<h2 class="ft-1">
Copyright©2021   All rights Reserved
</h2>
</body>
</html>