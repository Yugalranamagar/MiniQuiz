<?php include 'database.php';?>
<?php session_start();?>
<?php 
if(isset($_POST['submit'])){
	//get post variable 
	$question_number=$_POST['question_number'];
	$question_text=$_POST['question_text'];
	$correct_choice=$_POST['correct_choice'];
	//choice array 
	$choices=array();
	$choices[1]=$_POST['choice1'];
	$choices[2]=$_POST['choice2'];
	$choices[3]=$_POST['choice3'];
	$choices[4]=$_POST['choice4'];
	//Question query
	$query="INSERT INTO questions(question_number,text)
	VALUES ('$question_number','$question_text')";
	//Run Query
	$insert_row = $mysqli->query($query) or die($mysqli->error. __LINE__);
	//Validate inseret
	if($insert_row)
	{
  foreach($choices as $choice=> $value){
  if ($value !='')
  {
	if($correct_choice==$choice)
	{
		$is_correct=1;

	}
	else
	{
		$is_correct=0;
	}
	//Choice query
	$query= " INSERT INTO choices (question_number,is_correct,text)
	VALUES ('$question_number','$is_correct','$value')";
	//Run Query 
	$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	//Validate insert
	if($insert_row)
	{
		continue;
	}
	else
	{
		die ('Error:('.$mysqli->errno . ' ) ' . $mysqli->error);
	}
  }
 }
 $msg='Question has been added';
	}
    }
/*
*Get total questions
*/	
$query="SELECT * FROM questions ";
//get the result
$questions = $mysqli->query($query) or die ($mysqli->error.__LINE__);
$total = $questions->num_rows;
$next = $total+1;
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Add question</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<div class="conatiner">
			<h1>Mini-Quiz </h1>
		</div>
	</header>
<main>
	<div class="container">
		<h2> Add Question </h2>
		<?php 
		if(isset($msg)){
			echo '<p>'.$msg.'</p>';
		}
		?>
		<form method="POST" action="add.php">
			<p>
				<label>Question Number:</label>
				<input type="Number" value="<?php echo $next;?>" name="question_number"/>
			</p>
			<p>
				<label>Question Text:</label>
				<input type="text" name="question_text"/>
			</p>
			<p>
				<label>Choice #1:</label>
				<input type="text" name="choice1"/>
			</p>
			<p>
				<label>Choice #2:</label>
				<input type="text" name="choice2"/>
			</p>
			<p>
				<label>Choice #3:</label>
				<input type="text" name="choice3"/>
			</p>
			<p>
				<label>Choice #4:</label>
				<input type="text" name="choice4"/>
			</p>

             <p>
				<label>Correct Choice Number:</label>
				<input type="text" name="correct_choice"/>
			</p>
			<p>
				<input type="submit" name="submit" value="submit">
			</p>

		</form>
		
	</div>
</main>
</body>
</html>