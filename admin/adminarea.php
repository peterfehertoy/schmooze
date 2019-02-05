<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Login PHP</title>
	<link rel="stylesheet" href="adminarea.css" />
	<link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head>
<body>
	<div class="lg-container">	
		<div id="title_bar">
	
			
			
		</div>




		<div class="user">
		<?php
		session_start();
		if(!$_SESSION["login_user"])
		{
			header("location:admin.php?notlogedin=Lépj be!");	
		}
		else{
			echo "<h3>Üdv:".$_SESSION["login_user"]."</h3>"; 
		?>
		</div>
		
		
		<div class="logout">
		<?php
		echo"<a href='login/logout.php'>Logout</a>";
			
		}
		?>
		
		</div>	
	</div>
	
	
	
	
	
	<div id="content-1">

	</div>
	

	
	
<script src='jquery.js'></script>
<script src='index.js'></script>


	</body>
</html>