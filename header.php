<!-- Setup document -->
<?php session_start();?>
<!DOCTYPE html>
<?php require "alerts/useralerts.php";?>

<!-- Open HTML -->
<html lang="en">

	<!-- Head -->
	<head>
	    <!-- Sizing settings -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="">
	    <meta name="author" content="Thomas Wiltshire">

	    <!-- Website Title -->
	    <title>PIQUANT GAMES STORE</title>

	    <!-- Favicon -->
	    <link rel="shortcut icon" type="images/favicon.png" href="images/favicon.png" />

	    <!-- Bootstrap core CSS -->
	    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	    <!-- Custom fonts for this template -->
	    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

	    <!-- The main stylesheet for the website -->
	    <link rel="stylesheet" href="css/style.css">

	    <!-- Custom styles for this template -->
    	<link href="css/half-slider.css" rel="stylesheet">
	</head>
	<!-- Head -->

	<!-- Body -->
	<body>

		<!-- Header -->
	    <header>

		    <!-- Navigation -->
		    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		        <div class="container">

		            <a class="navbar-brand" href="index.php">PIQUANT GAMES STORE</a>

		            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		                <span class="navbar-toggler-icon"></span>
		            </button>

		            <div class="collapse navbar-collapse" id="navbarResponsive">
		                <ul class="navbar-nav ml-auto">

		                    <!-- Home -->
		                    <li class="nav-item">
		                        <a class="nav-link" href="index.php">HOME</a>
		                    </li>

		                    <!-- Games -->
		                    <li class="nav-item">
		                        <a class="nav-link" href="chatrooms.php">GAMES</a>
		                    </li>

		                    <!-- About -->
		                    <li class="nav-item">
		                    	<a class="nav-link" href="about.php ">ABOUT</a>
		                    </li>

		                    <!-- Spacing to seperate login and nav buttons -->
		                    <li class="nav-item">
		                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
		                    </li>

		                    <!-- Login/logout Button -->
		                    <li class="nav-item">

		                    	<!-- Open PHP -->
								<?php
									
									// if a user is logged in
									if (isset($_SESSION['userId']))
									{
										// Display the logout button
										echo '<form action="includes/user-logout.php" method="post"><button class="logout-btn" type="submit" name="logout-submit">LOG OUT</button></form>';
									}

									// else if no user logged in
									else
									{
										// Display the login button
										echo '<button class="login-btn" onclick="document.getElementById(\'id01\').style.display=\'block\'" style="width:auto;">LOG IN</button>';
									}
								?>
							</li>
							
							<!-- Signup Button -->
							<li class="nav-item">

								<!-- Open PHP -->
								<?php

									// if no user is logged in
									if (!isset($_SESSION['userId']))
									{
										// Display the signup button
										echo '<button class="signup-btn" onclick="document.getElementById(\'id02\').style.display=\'block\'" style="width:auto;">SIGN UP</button>';
									}
								?>
							</li>
		                </ul>
		            </div>
		        </div>
		    </nav>
		    <!-- Navigation -->

	    </header>
	    <!-- Header -->

	    <!-- Log in Modal -->
	   	<div id="id01" class="user-modal">
  			<form class="user-modal-content user-modal-animate" action="includes/user-login.php" method="post">
    			
    			<!-- Title and closing button -->
    			<div class="user-modal-title-container">
      				<span onclick="document.getElementById('id01').style.display='none'" class="user-modal-close" title="Close Modal">&times;</span>
      				<h3 class="user-modal-btnlabel">LOG IN</h3>
    			</div>

    			<!-- text box containers -->
	    		<div class="container" style="padding: 16px;">
	      			
	    			<!-- username input field -->
	      			<label for="mailuid" class="user-modal-btnlabel"><b>USERNAME</b></label>
	      			<input type="text" placeholder="USERNAME.." name="mailuid" required>

	      			<!-- password input field -->
	      			<label for="pwd" class="user-modal-btnlabel"><b>PASSWORD</b></label>
	      			<input type="password" placeholder="PASSWORD.." name="pwd" required>
	        		
	        		<!-- submit button -->
	      			<button type="submit" type="submit" name="login-submit" class="user-modal-btn">LOG IN</button>
	    		</div>

	    		<!-- bottom container -->
	    		<div class="container" style="background-color:#484d53; padding: 16px;">
	      			
	    			<!-- closing button -->
	      			<button type="button" onclick="document.getElementById('id01').style.display='none'" class="user-modal-cancel" style="margin-right: 10px;">CANCEL</button>
	      			
	      			<!-- forgot password button -->
	      			<span class="user-modal-forgot-btn" style="color:#ffffff;">FORGOT <a href="#">PASSWORD?</a></span>
	    		</div>
  			</form>
		</div>
		<!-- Log in Modal -->

		<!-- Sign up Modal -->
		<div id="id02" class="user-modal">
  			<form class="user-modal-content user-modal-animate" action="includes/user-signup.php" method="post">
    			
    			<!-- Title and closing button -->
    			<div class="user-modal-title-container">
      				<span onclick="document.getElementById('id02').style.display='none'" class="user-modal-close" title="Close Modal">&times;</span>
      				<h3 class="user-modal-btnlabel">SIGN UP</h3>
    			</div>

    			<!-- text box containers -->
	    		<div class="container" style="padding: 16px;">
	      			
	    			<!-- username input field -->
	      			<label for="uname" class="user-modal-btnlabel"><b>USERNAME</b></label>
	      			<input type="text" name="uid" placeholder="USERNAME.." required>

	      			<!-- email input field -->
	      			<label for="mail" class="user-modal-btnlabel"><b>EMAIL</b></label>
	      			<input type="text" name="mail" placeholder="EMAIL.." required>

	      			<!-- password input field -->
	      			<label for="pwd" class="user-modal-btnlabel"><b>PASSWORD</b></label>
	      			<input type="password" name="pwd" placeholder="PASSWORD.." required>

	      			<!-- password repeat input field -->
	      			<label for="pwd-repeat" class="user-modal-btnlabel"><b>REPEAT PASSWORD</b></label>
	      			<input type="password" name="pwd-repeat" placeholder="REPEAT PASSWORD.." required>
	        
	        		<!-- submit button -->
	      			<button type="submit" name="signup-submit" class="user-modal-btn" style="background-color:#3777dd;">SIGN UP</button>
	    		</div>

	    		<!-- bottom container -->
	    		<div class="container" style="background-color:#484d53; padding: 16px;">

	    			<!-- closing button -->
	      			<button type="button" onclick="document.getElementById('id02').style.display='none'" class="user-modal-cancel">CANCEL</button>
	    		</div>
  			</form>
		</div>
		<!-- Sign up Modal -->