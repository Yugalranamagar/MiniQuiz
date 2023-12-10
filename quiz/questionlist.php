
<!DOCTYPE html>
<html>
<head>
	<title>Question List</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h1> Question List</h1>
	<table border="1">
		<tr>
			<th>S.n</th>
			<th>Question</th>
			<th>Operation</th>
			
		</tr>
		<?php
		$conn=mysqli_connect("localhost","root","","project");
		if ($conn-> connect_error){
			die("Connection Failed:".$conn->connect_error);
		}
		$sql="SELECT question_number,text FROM questions";
		$result=$conn-> query($sql);
		if($result->  num_rows>0){
			while($row=$result-> fetch_assoc()){
				echo "<tr>";
				echo "<td>" . $row['question_number'] . "</td>";
				echo "<td>" . $row['text'] . "</td>";
				echo "<td><a href='delete1.php?question_number=".$row['question_number']."'>Delete</a></td>"; 	
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
<h1 class="ft-2">
Copyright©2021   All rights Reserved
	</h1>
</body>
</html>