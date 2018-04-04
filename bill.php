<!doctype html>
<html>
<link rel="stylesheet" type="text/css" href="styles/global.css" >
<head>

<style>
#wrap{
	margin-top: 50px;
	width:1240px;

}

.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}
.button {
    background-color:  #f44336; /* blue */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 2px;
     box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.left{
	width:350px;
	
	height:450px;
	float:left;
	font-family: 'Verdana';
	background-color: rgba(44, 62, 80,0.7);
	margin-top: 100px;


}
.right{
	width:250px;
	height:450px;
	float:right;
	font-family: 'Verdana';
	background-color: rgba(44, 62, 80,0.7);
	margin-top: 100px;
	margin-bottom: 2cm;

}

.hp {
	font-size:2em;
	float:right;
	color:#ecf0f1;
	
	margin-left:10px;
	margin-right: 10px;
	font-family: 'Monotype corosiva';
}
.p1 {
    margin-bottom: 2cm;
}
.p2{
	border-style: solid;
    border-width: 3px;
    border-radius: 2px;
    border-color: rgba(44, 62, 80,0.7);
}
	.container{
		width:500px;
		height: 720px;
		text-align: center;
		margin:0 auto;
		background-color: rgba(44, 62, 80,0.7);
		border-radius: 4px;
		margin-top: 150px;

	}
	.containerimg{
		width:120px;
		height:120px;
		margin-top:-60px;
		
		margin-bottom: 30px;
	}
	.container1 {
		width:120px;
		height:400px;
		margin:0;
		border-radius: 2px;
		background-color: rgba(44, 62, 80,0.7);
		margin-bottom: 120px;
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
.styled-select.slate {
   
   height: 60px;
   width: 50%px;
   margin:auto;
  	border-radius: 2px;

}

.styled-select.slate select {
   border: 1px solid #ccc;
   font-size: 24px;
   height: 60px;
   width: 268px;
}

/* -------------------- Rounded Corners */
.rounded {
   -webkit-border-radius: 20px;
   -moz-border-radius: 20px;
   border-radius: 20px;
}
.center {
    margin: auto;
    width: 80%;
    border: 3px solid #3F51B5;
    padding: 10px;
}
a{
	color:#fff;
}
	</style>
</head>
<?php
		include_once'header.php';

        ?>

	
<body bgcolor="GREY" style="background-image: url('')">

 
<div id="wrap">

	 <div class=right><br><h4 style="font:'bold';""> Bill remainders</h4>
						Have bill pay reminders sent to your mobile phone or email so you can plan ahead.<br><br>
						<h4 style=font:'bold';> Low funds</h4>
						Get warnings when your accounts are low.<br><br>
						<h4 style=font:'bold';> Bills due alerts</h4>
						If you’re more of the last-minute type, no worries.
					    You’ll get an alert when bill payments are due and you can schedule payment on the spot.<br><br>
						<h4 style=font:'bold';> Pricing</h4>
							<p>	No Monthly Fees<br>
								No Set up Fees<br>
								No Cancellation Fees</p>


	 					
	 </div>
	</div>
<div id="wrap">
	<div class="left"><p><h4 style="font:'bold'; flood-color:'yellow';">DISCLAIMER </h4><br>
		Please do not share your Paytm Wallet password, 
	Credit/Debit card pin, other confidential information with anyone even if he/she
    claims to be from Paytm. We advise our customers to completely ignore such communications 
    & report to us at cybercell@paytm.com.read more</p>
    <div id="hp">
<img src="images\mybill.png" style="width:310px;height:160px;align-items:'center';" class="containerimg"></div>
	</div>
</div>

	<div class="container">
		
		<form action="billdb.php" method="POST">
		<div id="hp">
			<div class="form-input">
				<br>
					<div id="hp">
					<h2 style="color:'indigo'; font:'bold'; ">Bill No: <input type="text" name="Billno" placeholder="Billno"><br></h2>
				</div>
		
			<div class="form-input" >
				<h2 style="color:'indigo'; font:'bold';float: left;padding-left: 20px"> Bill Type:</h2><div class="styled-select slate rounded">
					<select placeholder="billtype" >
 						 <option value="gas">Gas</option>
						  <option value="electricity">Electricity</option>
						  <option value="telephone">Telephone</option>
						  
					</select>
				</div>
			</div><br><br>
			<div class="form-input">
				<div id="hp">
				   <h2 style="color:'indigo'; font:'bold'; "> Due Date: <input type="date" name="duedate" placeholder="Duedate"><br></h2>
			</div>
			</div>
			<div class="form-input">
				<div class="p2">
				<h2 style="color:'indigo'; font:'bold';padding-top:20px; "> Add a Payment Method: </h2><br>
				<h3 style="text-align: center"><input type="radio" name="payment"> Debit card</h3>
				<h3 style="text-align: center">  <input type="radio" name="payment"> Credit card<br></h3>
				</div>
			</div><br>
		</div>
		</h1>
		
				<input type="submit"  name="next"><br><br><br>
		<img src="images\security.png" style="width:400px;height:240px;">
	
		
		</form>

	</div>

</div>
<br>

	<footer>
		<div class="center">
	<div class="row text-center">
		
		<div class="col-md-10 col-md-offset-1" style="line-height: 30px;">

			<div class="footer">
				
				<a href="/" title="Home">Home</a>&nbsp;·
				<a href="/features" title="Features">Features</a>&nbsp;·
				
				<a href="/terms" title="Terms" rel='nofollow'>Terms</a>&nbsp;·
				<a href="/sitemap" title="Sitemap">Sitemap</a>&nbsp;·
				<a href="/privacy" title="Privacy" rel='nofollow'>Privacy</a>&nbsp;·
				<a href="/faq" title="FAQ">FAQ</a>&nbsp;·
				<a href="/contact" title="Contact Us">Contact Us</a>&nbsp;·
				<a href="https://www.facebook.com/invoicehome" title="Facebook" target="_blank">Facebook</a>&nbsp;·
				<a href="https://twitter.com/InvoiceHome" title="Twitter" target="_blank">Twitter</a>&nbsp;·
				<a href="https://plus.google.com/+Invoicehome-invoice-templates" title="Google+" target="_blank">Google+</a>&nbsp;·
				<a href="https://www.youtube.com/channel/UCe2AUob8Lw3yvKFC7TjFBzg" title="YouTube" target="_blank">YouTube</a>&nbsp;·
				<a href="https://www.pinterest.com/invoice_home" title="Pinterest" target="_blank">Pinterest</a>&nbsp;·
				<a href="https://www.instagram.com/invoice_home" title="Instagram" target="_blank">Instagram</a>&nbsp;·
				<a href="https://www.linkedin.com/company/invoice-home" title="LinkedIn" target="_blank">LinkedIn</a>&nbsp;·
				<a href="/blog" title="Blog">Blog</a>

				<br><br>
				
				<img src="https://acme.invoicehome.com/assets/flags/flags-iso/flat/32/IN-52620b5433f8ce849d9ef9673cdcb7cd27aebe8dce588539e5ac22d8e450e1e3.png" alt="In" width="32" height="32" />&nbsp;&nbsp;India&nbsp;&nbsp;·&nbsp;&nbsp;Copyright © 2017&nbsp;&nbsp;·&nbsp;&nbsp;Wikilane Inc.	




				
			</div>
			
		</div>

	</div>
</div>

</footer>		
			
</body>
</html>
