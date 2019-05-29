<?php
	
	//
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="This is an example of a meta description. This will often show up in search results.">
		<meta name=viewpoint content="width=device-width, initial-scale=1">
		<title></title>
		<link rel="stylesheet" href="style.css">
	</head>
	
	<body>

	<header>
		<div class="custom-padding">
			<nav>
				<div class="logo">Logo</div>

				<ul class="menu-area">
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Portfolio</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">Contact</a></li>
					<li>
						<?php
							
							//
							if (isset($_SESSION['userId']))
							{
								//
								echo '<form action="includes/logoutincludes.php" method="post"><button class="logoutbtn" type="submit" name="logout-submit">LOGOUT</button></form>';
							}

							//
							else
							{
								//
								echo '<form action="includes/loginincludes.php" method="post"><input type="text" name="mailuid" placeholder="Username/Email..."><input type="password" name="pwd" placeholder="Password..."><button class="loginbtn" type="submit" name="login-submit">LOGIN</button></form>';
							}
						?>
					</li>
					<li>
						<?php

							//
							if (!isset($_SESSION['userId']))
							{
								//
								echo '<a class="signupbtn" href="signup.php">SIGNUP</a>';
							}
						?>
					</li>
					
					
				</ul>
			</nav>
		</div>
	</header>