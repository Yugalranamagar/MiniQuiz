
<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h1> User List</h1>
     <div class="container ">
	<table border="1">
		<tr>
		    <th>id</th>
			<th>Username</th>
			<th>Email</th>
			
			
		</tr>
		<?php
		$conn=mysqli_connect("localhost","root","","project");
		if ($conn-> connect_error){
			die("Connection Failed:".$conn->connect_error);
		}
		$sql="SELECT id,username,email FROM register";
		$result=$conn-> query($sql);
		if($result->  num_rows>0){
			while($row=$result-> fetch_assoc())
			{
				echo"<tr><td>".$row['id']."</td><td>".$row['username']."</td><td>".$row['email']."</td><tr>";
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
	<h1 class="ft-3">
	Copyright©2021   All rights Reserved
	</h1>
</body>
</html>