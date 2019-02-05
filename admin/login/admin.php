<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Login PHP</title>
	<link rel="stylesheet" href="login/styleadmin.css" />
	<link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="login/jquery-3.2.1.min.js"></script>

</head>
<body>
	<div class="admin_panel">
	<div class="lg-container">
		<h1>Admin Area</h1>
		<form action="login/login.php" id="lg-form" name="lg-form" method="POST">
			
			<div>
				<label for="username">Username:</label>
				<input type="text" name="txtuser" id="username" placeholder="username"/>
			</div>
			
			<div>
				<label for="password">Password:</label>
				<input type="password" name="txtpass" id="password" placeholder="password" />
			</div>
			
			<div>				
				<button type="submit" name="sub" id="login">Login</button>
			</div>
			
		</form>
		<div id="message">
		<h3 align="center" style="color: black;"><?php echo @$_GET["success"];?><h3>
		<h3 align="center" style="color: black;"><?php echo @$_GET["logout"];?><h3>
		<h3 align="center" style="color: black;"><?php echo @$_GET["invaild"];?><h3></div>
	</div>
	</div>
</body>
</html>