<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles/global.css" >
	
	<style>
	.container1{
		width:500px;
		height: 400px;
		text-align: center;
		margin:0 auto;
		background-color: rgba(44, 62, 80,0.7);
		border-radius: 4px;
		margin-top: 150px;

	}
	.container1 img{
		width:120px;
		height:120px;
		margin-top:-60px;
		margin-bottom: 30px;
	}
	input[type="text"],input[type="password"]{
		width:300px;
		height: 45px;
		font-size:1em;
		margin-bottom: 20px;
		background-color: #fff;
		padding-left:35px;
		border-radius: 4px;
		border:none;
	}
.btn-login{
	padding:15px 30px;
	cursor: pointer;
	color:#fff;
	border:none;
	border-radius: 4px;
	background-color:#2c3e50;
	border-bottom: 4px solid #3F51B5;
	margin-bottom: 20px;
}
a{
	color:#fff;
}
	</style>
</head>

	<?php

			include_once'header.php';
	?>
	
<body>
		<div class="container1">
			<img src="images/team.png">
				<form action="./logindb.php" method="POST" class="form-box">
				
				<div class="form-input">
					<input type="text" name="username" placeholder="Enter Username" required>
				</div>
				<div class="form-input">
					<input type="password" name="password" placeholder="Enter Password" required>
				</div>
				
				<input type="submit" name="loginSubmit" value="Login" class="btn-login"><br>		
			</form>
			<a href="register.php"><input type="button" name="submit" value="Register" class="btn-login"></a>
</body>
</html>