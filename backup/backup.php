<!-- Setup document -->
<?php session_start(); ?>
<!DOCTYPE html>

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
	    <title>CHATUR - GAMING CHATROOM</title>

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

		<!-- Navigation -->
	    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	        <div class="container">

	            <a class="navbar-brand" href="index.php">CHATUR - GAMING CHATROOM</a>

	            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	                <span class="navbar-toggler-icon"></span>
	            </button>

	            <div class="collapse navbar-collapse" id="navbarResponsive">
	                <ul class="navbar-nav ml-auto">

	                    <!-- Home -->
	                    <li class="nav-item active">
	                        <a class="nav-link" href="index.php">Home</a>
	                    </li>

	                    <!-- About -->
	                    <li class="nav-item">
	                        <a class="nav-link" href="chatrooms.php">Chat Rooms</a>
	                    </li>

	                    <!-- Projects -->
	                    <li class="nav-item">
	                    	<a class="nav-link" href="about.php ">About</a>
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
									echo '<form action="includes/user-logout.php" method="post"><button class="logoutbtn" type="submit" name="logout-submit">Log out</button></form>';
								}

								// else if no user logged in
								else
								{
									// Display the login button
									echo '<button class="loginbtn" onclick="document.getElementById(\'id01\').style.display=\'block\'" style="width:auto;">Log in</button>';
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
									echo '<button class="signupbtn" onclick="document.getElementById(\'id02\').style.display=\'block\'" style="width:auto;">Sign up</button>';
								}
							?>
						</li>
	                </ul>
	            </div>
	        </div>
	    </nav>
	    <!-- Navigation -->

		<!-- Header -->
	    <header>

	        <!-- Carousel -->
	        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

	            <!-- Carousel Indicators -->
	            <ol class="carousel-indicators">
	                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	            </ol>
	            <!-- Carousel Indicators -->

	            <div class="carousel-inner" role="listbox">

	                <!-- Slide One : Gypsys Tale -->
	                <div class="carousel-item active" style="background-image: url(images/gypsystalescreenshot.png);">
	                    <div style="background: rgba(0, 0, 0, 0.3); width:100%; height:100%;">
	                        <a href="projects.html#Gypsy">
	                            <div class="carousel-caption d-none d-md-block">
	                                <h3>Gypsy's Tale - Chatroom</h3>
	                                <p style="margin-bottom: 0px;">Chat with friends and other fans about the third-person adventure game, where</p>
	                                <p style="margin-bottom: 0px;">players take control of Gypsy, an inquisitive, cheeky Golden Retriever.</p>
	                                <p></p>
	                            </div>
	                        </a>
	                    </div>
	                </div>
	                <!-- Slide One : Gypsys Tale -->

	                <!-- Slide Two : Toy Wars  -->
	                <div class="carousel-item" style="background-image: url(images/toywarsscreenshot.png)">
	                    <div style="background: rgba(0, 0, 0, 0.3); width:100%; height:100%;">
	                        <a href="projects.html#ToyWars">
	                            <div class="carousel-caption d-none d-md-block">
	                                <h3>Toy Wars: Un-Bear-Able Warefare - Chatroom</h3>
	                                <p style="margin-bottom: 0px;">Chat with friends and other fans about the game that pits two hot-seated players</p>
	                                <p style="margin-bottom: 0px;">against each other in a turn-based PvP combat environment.</p>
	                                <p></p>
	                            </div>
	                        </a>
	                    </div>
	                </div>
	                <!-- Slide Two : Toy Wars  -->
	                
	                <!-- Slide Three : Zombie Game  -->
	                <div class="carousel-item" style="background-image: url(images/zombiegif.gif)">
	                    <div style="background: rgba(0, 0, 0, 0.3); width:100%; height:100%;">
	                        <a href="projects.html#Zombie">
	                            <div class="carousel-caption d-none d-md-block">
	                                <h3>Zombie Game - Chatroom</h3>
	                                <p style="margin-bottom: 0px;">Chat with friends about the popular retro-style top-down zombie survival shooter.</p>
	                                <p style="margin-bottom: 0px;">retro-style top-down zombie survival shooter.</p>
	                                <p></p>
	                            </div>
	                        </a>
	                    </div>
	                </div>
	                <!-- Slide Three : Zombie Game  -->

	            </div>

	            <!-- Prev Button -->
	            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	                <span class="sr-only">Previous</span>
	            </a>
	            <!-- Prev Button -->
	            <!-- Next Button -->
	            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	                <span class="carousel-control-next-icon" aria-hidden="true"></span>
	                <span class="sr-only">Next</span>
	            </a>
	            <!-- Next Button -->

	        </div>
	        <!-- Carousel -->

	    </header>
	    <!-- Header -->

	    <!-- Footer -->
	    <footer class="py-5 bg-dark" style="position:absolute; bottom:0; width:100%;">
	    
	        <a name="Contacts_Section"></a>

	        <!-- Copyright -->
	        <div class="container" style="margin-top: 30px;">
	            <p class="m-0 text-center text-white">Copyright &copy; Thomas Wiltshire 2018</p>
	        </div>
	        <!-- Copyright -->

	    </footer>
	    <!-- Footer -->

	    <!-- Bootstrap core JavaScript -->
	    <script src="vendor/jquery/jquery.min.js"></script>
	    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	    <!-- Bootstrap core JavaScript -->















	    <!-- Log in Modal -->
	   	<div id="id01" class="modal">
  			<form class="modal-content animate" action="includes/user-login.php" method="post">
    			<div class="imgcontainer">
      				<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      				<h3>Log In</h3>
    			</div>

	    		<div class="container" style="padding: 16px;">
	      			<label for="mailuid"><b>Username</b></label>
	      			<input type="text" placeholder="Enter Username" name="mailuid" required>

	      			<label for="pwd"><b>Password</b></label>
	      			<input type="password" placeholder="Enter Password" name="pwd" required>
	        
	      			<button type="submit" type="submit" name="login-submit" class="modalbutton">Log in</button>
	    		</div>

	    		<div class="container" style="background-color:#f1f1f1; padding: 16px;">
	      			<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="margin-right: 10px;">Cancel</button>
	      			<span class="psw">Forgot <a href="#">password?</a></span>
	    		</div>
  			</form>
		</div>
		<!-- Log in Modal -->

		<!-- Sign up Modal -->
		<div id="id02" class="modal">
  			<form class="modal-content animate" action="includes/user-signup.php" method="post">
    			<div class="imgcontainer">
      				<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      				<h3>Sign Up</h3>
    			</div>

	    		<div class="container" style="padding: 16px;">
	      			<label for="uname"><b>Username</b></label>
	      			<input type="text" name="uid" placeholder="Username" required>

	      			<label for="mail"><b>Email</b></label>
	      			<input type="text" name="mail" placeholder="Email" required>

	      			<label for="pwd"><b>Password</b></label>
	      			<input type="password" name="pwd" placeholder="Password" required>

	      			<label for="pwd-repeat"><b>Repeat Password</b></label>
	      			<input type="password" name="pwd-repeat" placeholder="Repeat Password" required>
	        
	      			<button type="submit" name="signup-submit" class="modalbutton">Sign up</button>
	    		</div>

	    		<div class="container" style="background-color:#f1f1f1; padding: 16px;">
	      			<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
	    		</div>
  			</form>
		</div>
		<!-- Sign up Modal -->















	</body>
	<!-- Body -->

</html>

<!-- https://startbootstrap.com/template-overviews/freelancer/ -->