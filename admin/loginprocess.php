<?php 
require_once "../admin/login.php";
$username=$_POST['username'];
$password=$_POST['password'];
$sql="select * from register where username='$username' and password='$password'";
$query=mysqli_query($conn,$sql);
$result=mysqli_fetch_array($query);
      $username=$result['username'];
      $password=$result['password'];
      if($result>=1){
      	session_start();
       header('location:../quiz/dashboard.php');
      }
      else{
      	
              
                  echo"<script> alert('Wrong Username and Password!');window.location='admin.php'</script>";
                
                      
      
      }
 ?>
