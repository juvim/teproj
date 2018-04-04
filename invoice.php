<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles/global.css" >
	<style>
	.container1{
		width:600px;
		height: 700px;
		text-align: center;
		margin:0 auto;
		background-color: rgba(44, 62, 80,0.7);
		border-radius: 4px;
		margin-top: 150px;

	}
		.container img{
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
		padding-right: 35px;
		border-spacing: 50px;
	}
	#wrap{
	margin-top: 50px;
	width:1300px;

}
.left{
	width:800px;
	
	height:420px;
	float:left;
	font-family: 'Verdana';
	background-color: rgba(44, 62, 80,0.7);
	margin-top: 100px;
	margin-left: 50px;
	


}
.right{
	width:350px;
	height:420px;
	float:right;
	font-family: 'Verdana';
	background-color: rgba(44, 62, 80,0.7);
	margin-top: 100px;
	margin-right:50px;
	margin-bottom: 2cm;
}
.p2{
	border-style: solid;
    border-width: 3px;
    border-radius: 2px;
   	border-color: brown;
}
.btn-login{
	padding:15px 30px;
	cursor: pointer;
	color:#fff;
	border:none;
	border-radius: 4px;
	background-color:white;
	border-bottom: 4px solid #3F51B5;
	margin-bottom: 20px;
}
.center {
    margin: auto;
    width: 50%;
    border: 3px solid green;
    padding: 10px;
    background-color: #F5DEB3;
}
{div margin=20px;}

</style>
	</head>
	<?php
			include_once'header.php';
	?>
	<body style="background-image: url('')">
		
		<div id="wrap">
			<div class="left">
			
				<br>
				<form >
				
				<h1 style="font:'bold';color: brown;text-decoration:underline;word-spacing: 10px;text-align: center">Payment Confirmation!!</h1><br><br>
				<div class="p2">
				<div class="center">
					<h2 style="font:bold;height:25px;color:red;text-align: center">Payment Successful.</h2><br>
					Thank you for your payment.Kindly note that the bill shall be issued in due time and bill related details will be sent to you seperately.<br></</div>	
				</div>	<br>
				<div class="form-input">

						Invoice no<input type=text style="text-align: center;" name="Invoiceno" class="btn-login">
				</div>
				<div class="form-input">
					Bill Holder Name<input type=text style="text-align: center;" name="Bill Holder name" class="btn-login">
				</div>
			</form>
			
		</div>
	</div>
	<div id="wrap">
		<div class="right">
			
			<br>
			
				<h2 style="font:'bold';color: black;text-decoration:italic;word-spacing: 10px;text-align: center">
					If you have any comments or questions please do not hesitate to contact us:<br>
<p>


<h1>PayItDesk</h1>
HC Andersens Boulevard 44-46
1553 Copenhagen V
India

Tel.: +45 333 777 55
Fax: +45 333 777 56
info@PayItDesk.com

<br><br>
Thanks again and have a great day.
</p>
</h2>
</div>
			
		</div>
	</div>
</body>			


			


