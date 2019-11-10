
<html>
<head>
<title>Quiz</title>
</head>
<body>
<style>
body{
	background:#bfe4ff url('images/yes.png') center no-repeat;
}
</style>
<?php 

$conn_error='could not connect';
$host='localhost';
$user='root';
$pass='';
$db='quiz';

$conn=mysqli_connect($host,$user,$pass) or die ($conn_error);
mysqli_select_db($conn,$db) or die ($conn_error);

?>
<h1><b><center>WELCOME TO QUIZ...!</h1></b></center>
<style>
form{
	margin:15px;
	padding:15px;
}
</style>
<form action="quiz_result.php" method="POST">
<?php
$q="SELECT * FROM question ORDER BY rand() limit 5";
$x=1;
$query=mysqli_query($conn,$q);
while ($rows = mysqli_fetch_array($query)){
	?>
	<?php echo $x; echo "."; ?>
	<?php echo $rows['question']; echo "<br/>";?>
	<?php
	$q="SELECT * FROM answer WHERE ansID='{$rows['qID']}' order by rand()";
	$query1=mysqli_query($conn,$q);
	$x++;
	while($rows = mysqli_fetch_array($query1)){
		?>
		<input type="radio" name="quizcheck[<?php echo $rows['ansID'];?>]" value="<?php echo $rows['aID'];?>">
		<?php echo $rows['answer']; echo "<br/>";?>
<?php		
}} ?>
<br/><br/>
<center><input type="submit" name="submit" value="submit"></center>
<style>
input[type=submit]{
	width:25%;
	background:black;
	cursor:pointer;
	font-size:20px;
	font-weight:bold;
	color:white;
}
input[type=submit]:hover{
	background:red;
}
</style>
</form>
</body>
</html>