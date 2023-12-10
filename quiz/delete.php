<?php
  $servername='localhost';
  $username='root';
  $password='';
  $dbname = "project";
  $conn=mysqli_connect($servername,$username,$password,$dbname);
  if(isset($_GET['id']))
    $id=$_GET['id'];
$sql = "DELETE FROM register WHERE id='" .$_GET['id']. "'";
if(mysqli_query($conn, $sql))
 {
    echo"<script> alert('Record Deleted Successfully!');window.location='manage.php'</script>";
        
} 
else
 {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>