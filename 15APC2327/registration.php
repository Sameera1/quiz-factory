<html>
<body>
<style>
body{
	background:url('images/quiz.jpg') center no-repeat;
}
</style>
<?php 
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'login');
$name=$_POST['user'];
$pass=$_POST['password'];

$s="select * from log where name='$name'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1){
	echo "<h3><center>Username is already taken</center></h3>";
}
else{
	$reg="insert into log(name,password) values('$name','$pass')";
	mysqli_query($con,$reg);
	echo "<h2><center>Registration Successful! </center></h2><br>";
    echo "<center><h3><a href='quiz.php'>Click here to begin</a></h3></center>";
}
?>
</body>
</html>