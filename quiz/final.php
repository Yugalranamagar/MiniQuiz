<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Result</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<header>
		<div class="container">
			<h1> MINI-Quiz</h1>
	</header>
	<main>
		<div class="container">
			<h2> You are Done!</h2>
			<p class="p2"> Congrats!<?php  if (isset($_SESSION['username'])) : ?>
    	<p><strong><?php echo $_SESSION['username']; ?></strong></p>
		<?php endif ?> You have completed the quiz </p>
			<p> Final Score:<?php 
			 if (isset($_SESSION['score'])) {
				echo $_SESSION['score'];
				unset($_SESSION['score']);
			}
			 ?>
			</p>
				<a href="question.php?n=1" class="start">Try Again</a>
				<a class="p3" href="../login.php"> Log out </a>
	</main>
   </footer>
   <div class="container-2">
   Copyright©2021   All rights Reserved
   </div>
</body>
</html>