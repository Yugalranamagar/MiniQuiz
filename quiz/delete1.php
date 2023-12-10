<?php
  $servername='localhost';
  $username='root';
  $password='';
  $dbname = "project";
  $conn=mysqli_connect($servername,$username,$password,$dbname);
  if(isset($_GET['question_number']))
  $question_number=$_GET['question_number'];
$sql = "DELETE FROM questions WHERE question_number='" .$_GET['question_number']. "'";
$sql1 = "DELETE FROM choices WHERE question_number='" .$_GET['question_number']. "'";
if(mysqli_query($conn, $sql))
if(mysqli_query($conn, $sql1))
 {
    echo"<script> alert('Question Deleted Successfully!');window.location='questionlist.php'</script>";
        
} 
else
 {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>