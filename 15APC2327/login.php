<html>
<head>
<title>User Login & Registration</title>

</head>
<body>
<style>
body{
	background:#bfe4ff url('images/yeah.jpg') left repeat-x;
}
</style>
<div class="login-box">
<h1><center><b>Register To Take The Quiz</h1></center></b>
<div class="login-left">
<h2>Login Here</h2>
<form action="validation.php" method="post">
<div class="form-group">
<label><b>Username:</b></label>
<input type="text" name="user" class="form-control" required/>
</div>
<div class="form-group">
<label><b>Password :</b></label>
<input type="password" name="password" class="form-control" required/>
</div><br/><br/>
<input type="submit" name="submit" value="submit">
</form>
</div>


<div class="login-right">
<h2>Register Here</h2>
<form action="registration.php" method="post">
<div class="form-group">
<label><b>Username:</b></label>
<input type="text" name="user" class="form-control" required/>
</div>
<div class="form-group">
<label><b>Password :</b></label>
<input type="password" name="password" class="form-control" required/>
</div><br/><br/>
<input type="submit" name="submit" value="submit">
</form>
</div>
</div>
<style>
.login-box{
	width:50%;
	height:400px;
	background:#fff;
	margin:100 auto;
	border:2px solid #fff;
	box-shadow:0 15px 40px rgba(0,0,0,0.5);
}
.login-box .login-left{
	float:left;
	width:50%;
	height:400px;
	box-sizing:border-box;
	padding:40px;
}
.login-box .login-right{
	float:right;
	width:50%;
	height:400px;
	box-sizing:border-box;
	padding:40px;
}
.form-control{
	background-color:transparent;
}

input[type=submit]{
	width:50%;
	background:black;
	cursor:pointer;
	font-size:18px;
	font-weight:bold;
	color:white;
}
input[type=submit]:hover{
	background:red;
}

</style>
</body>
</html>

