<?php
  
  $conn_error="could not connected";
  $host='localhost';
  $user='root';
  $pass='';
  $db='quiz';

  $conn=mysqli_connect($host,$user,$pass) or die ($conn_error);
  //echo "connected";
  mysqli_select_db($conn,$db) or die ($conn_error);
 // echo "connected";
  ?>

<html>
<head>
	
</head>
<body>
<style>
body{
	background:url('images/result.jpg') center no-repeat;
}
</style>
<h1><center>Result</center></h1>
	
<?php 

$result = 0;
if (isset($_POST['submit'])) {
if (!empty($_POST['quizcheck'])) {
$count = count($_POST['quizcheck']);

?>
	
		<?php 
			 echo "<center><b>Out of " . $count. "</b></center>" ;
	
		 ?>
	

		<?php 
			$selected = $_POST['quizcheck'];
			$q = "select * from question";
			$query = mysqli_query($conn, $q);
			$i = 1;
			while($rows = mysqli_fetch_array($query)) {

			$checked = $rows['ansID'] == $selected[$i];
			if ($checked) {
			$result++;
			}else{

				 }
			 		$i++;
					
				}
		?>


		<?php 
			echo " <center><b>your score is " .$result." </b></center>" ;
			echo "<br>";
			echo "<br>";
			}
			else{
				echo "<b>Please Select Atleast One Option.</b>";
				}
				 
				}
				?>


</body>
</html>