<?php require_once("dbase.php");
$result = mysqli_query($conn,"SELECT * FROM register");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Manage user</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h1> Manager Panel</h1>
    <div class="container-1">
	<table border="1">
		<tr>
		    <th>id</th>
			<th>Username</th>
			<th>Email</th>
			<th>Update</th>
            <th>Delete</th>
			
		</tr>
		<?php

		$sql="SELECT id,username,email FROM user";
		$result=$conn-> query($sql);
		if($result->  num_rows>0){
			while($row = mysqli_fetch_array($result)){
				echo "<tr>";
				echo "<td>" . $row['id'] . "</td>";
				echo "<td>" . $row['username'] . "</td>";
				echo "<td>" .$row['email']. "</td>";
	
				echo "<td><a href='update.php?id=".$row['id']."'>Edit</a></td>";
				echo "<td><a href='delete.php?id=".$row['id']."'>Delete</a></td>"; 
				echo "</tr>";
			}
			echo "</table>";
		}
		else{
			echo "0 result";

		}
$conn-> close();
?>
</table>
</div>
</body>
</html>