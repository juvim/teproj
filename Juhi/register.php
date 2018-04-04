<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles/global.css" >

<style>
	*{
        		margin: 0;
        		padding: 0;
        		-webkit-box-sizing: border-box;
        		-moz-box-sizing: border-box;
        		box-sizing: border-box;
        		font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
        	}
        	body{
        		background-color: #555;
        	}
        	.main{
        		width: 500px;
        		background-color: #eee;
        		margin: 20px auto;
        		border-radius: 5px;
        		border: 5px solid #888;
        		box-shadow: 0 0 10px #000;
        	}
        	header{
        		width: 100%;
        		padding: 10px;
        		text-align: center;
        		background: linear-gradient(#191970,#4169e1);
        		color: #fff;
        		font-size: 25px;
        		text-shadow: 1px 1px 2px #000;
        	}
        	.form-box{
        		padding: 10px 25px 20px 25px;
        	}
        	.inp{
        		font-size: 15px;
        		width: 100%;
        		padding: 12px 12px 12px 50px;
        		border: none;
        		box-shadow: 0 0 2px 1px #444;
        	}
        	.inp:focus{
        		outline: none;
        		box-shadow: 0 0 5px 1px #4169e1;
        		color: #191970;
        		font-weight: bold;
        	}
        	label{
        		font-size: 18px;
        		color: #191970;
        	}
        	.icon img{
        		position: absolute;
        		width: 45px;
        		height: 41px;
        		padding: 5px;
        		background-color: #eee;
        		border-right: 1px solid #888;
        		border-top-left-radius: 2px;
        		border-bottom-left-radius:2px;
        	}
        	.inp-row{
        		margin: 5px 0 10px 0;
        	}
        	.sub-btn{
        		width: 100%;
        		padding: 10px;
        		font-size: 18px;
        		background: linear-gradient(#dc143c,#b22222);
        		cursor: pointer;
        		color: #fff;
        		border: none;
        	}
        	.sub-btn:hover{
        		background: linear-gradient(#b22222,#dc143c);
        	}
        	.sub-btn:focus{
        		outline: none;
        	}
        	.social{
        		width: 100%;
        		margin-top: 10px;
        	}
        	.social h3{
        		text-align: center;
        		color: #444;
        		font-size: 25px;
        		padding-bottom: 10px;
        	}
        	.sc-icon img{
        		width: 30px;
        		height: 30px;
        		margin: 0 15px 0 0;
        		float: left;
        	}
        	.fb-icon{
        		background-color: #3b5998;
        		border-radius: 3px;
        		color: #fff;
        		float: left;
        		padding: 10px 40px 10px 20px;
        	}
        	.gp-icon{
        		background-color: #dd4b39;
        		border-radius: 3px;
        		color: #fff;
        		float: right;
        		padding: 10px 40px 10px 20px;
        	}
        	.sc-icon a{
        		text-decoration: none;
        		font-size: 16px;
        		display: block;
        		width: 50%;
        		float: left;
        		line-height: 2;
        	}
        	.sc-icon a:hover{
        		opacity: 0.9;
        	}
        	.path{
        		clear: both;
        		width: 100%;
        		padding: 10px;
        		background-color: #eee;
        	}

</style>
</head>
<?php 
    include_once './header.php';
?>
    <body>



<div class="main">
		<header>Register With Us</header>
		<form action="registerdb.php" method="post" class="form-box" name="reg" onsubmit="return register()">
			<label for="username">Your username</label>
			<div class="inp-row">
				<div class="icon"><img src="images/user1.png"></div>
				<input type="text" name="username" class="inp" placeholder="username" required>
			</div>
			<label for="email">Your email</label>
			<div class="inp-row">
				<div class="icon"><img src="images/mail1.png"></div>
				<input type="email" name="email" class="inp" placeholder="user_email@mail.com" required>
			</div>
			<label for="password">Your password</label>
			<div class="inp-row">
				<div class="icon"><img src="images/password1.png"></div>
				<input type="password" name="pass" class="inp" placeholder="your password" required>
			</div>
			<label for="repass">Please confirm your password</label>
			<div class="inp-row">
				<div class="icon"><img src="images/password1.png"></div>
				<input type="password" name="repass" class="inp" placeholder="confirm your password" required>
			</div>
			<div class="inp-row">
				<input type="checkbox" class="agree"><label for="agree">I agree with the terms and conditons</label>
			</div>
			<input type="submit" name="submitSignup" class="sub-btn" value="Sign up">
		</form>
	</body>
</html>

