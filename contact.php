<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>contact - Running</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div id="navigation">
				<span id="mobile-navigation">&nbsp;</span>
				<a href="index.html" class="logo"><img src="images/merdekalogo.png" alt=""></a>
				<ul id="menu">
					<li>
						<a href="index.html">Home</a>
					</li>
					<li>
						<a href="about.html">About</a>
					</li>
					<li class="selected">
						<a href="contact.php">Contact</a>
					</li>
				</ul>
			</div>
		</div>
		<div id="body" class="contact">
			<div>
				<h1>Contact us</h1>
				<img src="images/map.png" alt="">
				<h2>ADDRESS</h2>
				<p>KOLEJ KERAWANG, CHENDERING, TERENGGANU</p>
				<h2>NUMBERS</h2>
				<p>+60123456789 / +60123456789</p>
				<h2>Email</h2>
				<p>merdekavrun@php.com</p>
				<h4>JOIN MERDEKA VIRTUAL RUN NOW</h4>
				<form action="contactaction.php" method="post">
					<input type="text" name="username" placeholder="Name" onblur="this.value=!this.value?'Name':this.value;" onfocus="this.select()" onclick="this.value='';">
					<input type="text" name="address" placeholder="Address" onblur="this.value=!this.value?'Address':this.value;" onfocus="this.select()" onclick="this.value='';">
					<input type="text" name="email" placeholder="Email" onblur="this.value=!this.value?'Email':this.value;" onfocus="this.select()" onclick="this.value='';">
					<input type="text" name="telno" placeholder="Phone Number" onblur="this.value=!this.value?'Phone Number':this.value;" onfocus="this.select()" onclick="this.value='';">
					<input type="submit" value="Send" id="submit">
				</form>
			</div>
		</div>
		<div id="footer">
			<div>
				<p>&copy; 2022 by ADIB. All rights reserved.</p>
			</div>
		</div>
	</div>
</body>
</html>
