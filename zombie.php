<!-- Run some php code -->
<?php
	// add in the header.php 
	require "header.php";

	// get data time for melb
	date_default_timezone_set('Australia/Melbourne');
	
	// includes for other php files
	include 'includes/user-comment.php';
	include 'includes/dbconnect.php';
?>

		<!-- Carousel -->
	    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	        <div class="carousel-inner" role="listbox">
	            <div class="carousel-item active" style="background-image: url(images/zombiegif.gif)">
	                <div style="background: rgba(0, 0, 0, 0.3); width:100%; height:100%;">
	                    <div class="carousel-caption d-none d-md-block">
	                        <img src="images/zombietitle.png" style="height:40%; width:40%;"/>
							</br></br></br></br>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!-- Carousel -->

		<!-- Main content background -->
	    <section class="py-5" style="background-color: #1E1F23;">
	        
	        <!-- Main content frame -->
	        <div class="row" style="margin-left: 20%; margin-right: 20%; padding-left: 35px; padding-right: 35px; padding-bottom: 35px; vertical-align:middle; text-align:center;">
	            
				<!-- page content -->
	            <div class="col-md-12" style="vertical-align:middle;">
					<div class="row" style="vertical-align:middle; background-color: transparent;">

						<!-- LEFT TILE GROUP -->
						<div style="width:60%; height:100%; background-color:transparent; text-align: center; margin-right: 20px;">
							
							<!-- page title -->
							<h1 class="col-md-12" style="margin-top:15px; margin-bottom:55px; color: #b3b3b3; text-align: left;">ZOMBIE GAME</h1>

							<!-- GAME INFORMATION TEXT -->
							<div style="width:100%; height:100%; background-color: transparent; padding:20px">
								
								<!-- SECTION 1 -->
									<!-- Paragraph 1 -->
									<p style="color: #b3b3b3; text-align: left;">Zombie Game (Now with original title!) is a retro-style top-down zombie survival shooter. (lots of descriptive words!) It's the story of a nameless survivor in an empty, desolate world with nothing but the clothes on his back and a loaded pistol to make it through the day. Also, everyone else who supposedly once lived and breathed like him became zombies somehow and he has to fight them, or they'll eat him or something. You know the drill.</p>

									<!-- Paragraph 1 -->
									<p style="color: #b3b3b3; text-align: left;">This is our studio's first foray into creating a full, playable, and fun game. While we have worked on other projects in the past, namely game jams such as BaconGameJam, Zombie Game is our first polished and regularly updated video game.</p><br>
								<!-- SECTION 1 -->

								<!-- SECTION 2 -->
									<h4 style="color: #b3b3b3; text-align: left;">FEATURES</h4><br>
									
									<!-- Current modes -->
									<p style="color: #b3b3b3; text-align: left;">The game currently has 2 fast paced and fun modes:</p>
									
									<ul>
										<!-- Dot point 1 -->
	  									<li style="color: #b3b3b3; text-align: left;">Arcade: A grassy area with an endless supply of zombies for you to destroy. Powerups like the Minigun, Invulnerability Shield, and SMG help your waveclear significantly as the zombies become faster and more numerous.</li><br>

	  									<!-- Dot point 2 -->
										<li style="color: #b3b3b3; text-align: left;">Stuck In The Mud: A test for your clicking hand. As the name implies, you're stuck in the mud. You cannot move. And you'll probably get RSI if you play for too long. In this game mode, accuracy is everything. You'll be graded on your zombie killing efficiency with your post game score influenced by how many shots you've hit/ missed.</li>
									</ul><br>

									<!-- Additional modes -->
									<p style="color: #b3b3b3; text-align: left;">We plan on adding 2 additional modes:</p>
									
									<ul>
	  									<!-- Dot point 1 -->
	  									<li style="color: #b3b3b3; text-align: left;">Survival: Survive by finding food, water and ammunition. Build shelter to protect you at night. This is essentially the "story" or "campaign" mode.</li><br>

	  									<!-- Dot point 2 -->
										<li style="color: #b3b3b3; text-align: left;">Endless (Name not final): Zombies get much tougher in this game mode as does pretty much everything else. Your weapons have finite ammo which you need to buy with currency you earn from zombie kills. Expanding the playable area is also possible by spending your currency to unlock new areas. Think Call Of Duty: Zombies meets Hotline Miami's gameplay style (With of course Zombie Game).</li>
									</ul><br>
								<!-- SECTION 2 -->

								<!-- SECTION 3 -->
									<!-- Title -->
									<h4 style="color: #b3b3b3; text-align: left;">LöVE2D</h4><br>

									<!-- Paragraph 1 -->
									<p style="color: #b3b3b3; text-align: left;">This game was built using the Löve2D framework, a free and open source framework for building 2D games based off Lua. We'd highly recommend it as it is relatively simple but powerful!</p>
								<!-- SECTION 3 -->

							</div>
							<!-- GAME INFORMATION TEXT -->
							
						</div>
						<!-- LEFT TILE GROUP -->

						<!-- RIGHT TILE GROUP -->
						<div style="width:35%; height:100%; background-color:transparent; text-align: center; margin-left: 20px;">
							
							<!-- zombie image -->
							<img src="images/zombfull.png" style="height:80%; width:80%; margin-top:250px;"/>
						</div>
						<!-- RIGHT TILE GROUP -->

					</div>

					<!-- Leave a space -->
					<br><br><br>

					<!-- Download button -->
					<div style="padding:25px; vertical-align:middle; text-align:center; margin:auto;" >
						<a class="download-btn" href="http://teampiquant.com/games/zombiegame/ZombieGame-0.1.3-64.zip">FREE - DOWNLOAD NOW</a>
					</div>

					<!-- Seperator line for download and comment section -->
					<hr class="comment-downloadhr">

					<!-- COMMENT SECTION -->
					<div class="comment-section" style="margin-top: 100px">

						<!-- Comment heading -->
						<h4 style="color: #b3b3b3; text-align: center;">LEAVE A COMMENT</h4>

						<!-- Insert a break -->
						<br>

						<!-- Run some php code -->
						<?php

							// if the user is logged in
							if (isset($_SESSION['userId']))
							{

								// echo some html code
								echo "<form method='POST' action='".SetComments($ConnectDataBase)."'>
										<input type='hidden' name='uid' value='".$_SESSION['userId']."'>
										<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
											
										<div style='width:100%; vertical-align:middle; margin:auto; text-align:center;'>
											<textarea class='comment-section' name='message' placeholder='Type your comment..'></textarea>
											<button style='wdith:100px; height:80px;' type='submit' name='CommentSubmit'>SEND</button>
										</div>

									</form>";
							}

							// else if no user
							else
							{
								// print message to tell the user to login
								echo "<p style='color:#b3b3b3;'>PLEASE LOG IN TO MAKE COMMENTS!</p>
									<br><br>";
							}

							// Run get comments function
							GetComments($ConnectDataBase);
						?>
					</div>
					<!-- COMMENT SECTION -->

	            </div>
				<!-- page content -->

			</div>
	        <!-- Main content frame -->

	    </section>
	    <!-- Main content background -->				

<!-- Add in the footer html -->
<?php
	require "footer.php";
?>