<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 
$alphas = array_merge(range('a', 'z'), range('A', 'Z'));

// connect to the database
$dbname= mysqli_connect('localhost', 'root', '','project');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($dbname, $_POST['username']);
  $email = mysqli_real_escape_string($dbname, $_POST['email']);
  $password_1 = mysqli_real_escape_string($dbname, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($dbname, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)){
    array_push($errors, "*Username cannot be blank<br>");
}else if(!preg_match("/^[a-zA-Z0-9_]*$/",$username)){
    array_push($errors, "*Username can only contain alpha-numeric characters or an underscore<br>");
}else if(!in_array($username[0],$alphas)){
    array_push($errors, "Username must begin with a letter<br>");
}
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM register WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($dbname, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }
   // Finally, register user if there are no errors in the form
   if (count($errors) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database

    $query = "INSERT INTO register (username, email, password) 
              VALUES('$username', '$email', '$password')";
    mysqli_query($dbname, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "Registeration Succesfully done!";
    header('location:index.php');
}
}
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($dbname, $_POST['username']);
    $password = mysqli_real_escape_string($dbname, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM register WHERE username='$username' AND password='$password'";
        $result = mysqli_query($dbname, $query);
        if (mysqli_num_rows($result)>=1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location:quiz/index.php');
        }
        else {
              
          echo"<script> alert('Wrong Username and Password!');window.location='login.php'</script>";
        
              }
    }
  }
  
  ?>