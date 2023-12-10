<?php
echo '<script>alert("Welcome Admin!")</script>'
?>
  
<html>
<title>Admin Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style1.css">
<body>
<div>
  <h1>Admin Panel</h1>
</div>

<!-- Sidebar -->
<div class="sidebar">
	<div class=main-1>
  <h3 class="bar-item">Menu</h3>
</div>
 <a href="../quiz/manage.php" class="button">Manage User</a>
  <a href="../quiz/questionlist.php" class="button">Question List</a>
  <a href="../quiz/add.php" class="button">Add Question</a>
  <a href="../quiz/userlist.php" class="button">UserList</a>
</div>

</body>
</html>