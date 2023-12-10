<?php include 'database.php';?>
<?php session_start();?>
<?php
/*
*Get Total Questions
*/
$query="SELECT * FROM questions";
//Get Result
$result=$mysqli->query($query) or die($mysqli->error.__LINE__);
$total=$result->num_rows;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mini-Quiz</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php  if (isset($_SESSION['username'])) : ?>
    	<p class="a2">Welcome! <strong><?php echo $_SESSION['username']; ?></strong></p>
		<?php endif ?>
	<header>
		<div class="container">
			<h1> Mini-Quiz </h1>

	</header>
	<main>
		<div class="container">
			<h2> Test Your Knowledge</h2>
			<p class="p-1">
				This is multiple choice quiz to test your knowledge
			</p>
			<ul>
				<li><strong>Number of Question:</strong><?php echo $total;?></li>
				<li><strong>Type:</strong>Multiple Question</li>
				<li><strong>Estimated time:</strong><?php echo $total * .5;?>Minutes</li>
			</ul>
			<a href="question.php?n=1" class="start">Start  Quiz</a>

	</main>
	<footer>
		<div class="container">
		Copyright©2021   All rights Reserved
		</div>
	</footer>
</body>
</html>