<?php include 'database.php';?>
<?php  session_start();?>
<?php
//Set Question number
$number = (int) $_GET['n'];
/*
*Get total questions
*/	
$query="SELECT * FROM questions ";
//result
$results=$mysqli->query($query) or die ($mysqli->error.__LINE__);
$total=$results->num_rows;
/*
* Get number
*/
$query = "SELECT * FROM questions WHERE question_number = $number";
//Get result
$result=$mysqli->query($query) or die($mysqli->error.__LINE__);
$question=$result->fetch_assoc();
/*
* Get Choices
*/
$query = "SELECT * FROM choices WHERE question_number = $number";
//Get result
$choices=$mysqli->query($query) or die($mysqli->error.__LINE__);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP Quiz</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<div class="container">
			<h1> Mini-Quiz </h1>

	</header>
	<main>
		<div class="container">
	<div class="current">Question <?php echo $question['question_number'];?> of <?php echo $total; ?></div>
			<p class="Question">
				<?php echo $question['text'];?>
			</p>
			<form method="POST" action="process.php">
				<ul class="choices">
					<?php while ($row = $choices->fetch_assoc()): ?>
					<li><input type="radio" name="choice" value="<?php echo $row['id'];?>"/><?php echo $row['text'];?></li>
				<?php endwhile; ?>
				</ul>
				<input type="submit" value="Next Question">
				<input type="hidden" name="number" value="<?php echo $number;?> ">
			</form>
		</div>

	</main>
	<footer>
		<div class="container">
		Copyright©2021   All rights Reserved
		</div>
	</footer>
</body>
</html>