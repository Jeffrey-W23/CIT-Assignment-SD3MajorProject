<!-- Open some php -->
<?php
	
	// insert header at top
	require "header.php";
?>

		<!-- Main content background -->
	    <section class="py-5" style="background-color: #121212;">
	        
	        <!-- Main content frame -->
	        <div class="row" style="margin-left: 20%; margin-right: 20%; padding-left: 35px; padding-right: 35px; padding-bottom: 35px; vertical-align:middle; text-align:center;">
	            
				<!-- page content -->
	            <div class="col-md-12" style="vertical-align:middle; text-align:center;">
					<div class="row" style="vertical-align:middle; text-align:center; background-color: transparent;">

						<!-- page title -->
						<h1 class="col-md-12" style="margin-top:55px; margin-bottom:55px; text-align:center; color: #b3b3b3;">TIC TAC TOE</h1>

						<!-- New form for the tic tac toe game -->
						<form name="tictactoe" method="post" action="tictactoe.php" class="tictactoe-board" style="margin: auto;">

						<!-- Open php -->
						<?php

							// link to the tictactoe game
							include "includes/logic-tictactoe.php";

							// if the user is logged in
							if (isset($_SESSION['userId']))
							{
								// loop through the array and get all the board pieces
								for ($i = 0; $i <= 8; $i++)
								{
									// print the tic tac toe board
									echo '<input class="tictactoe-board" type="text" name="box'.$i.'" value="'.$box[$i].'">';

									// break the inputs up into a proper board
									if ($i == 2 || $i == 5 || $i == 8)
									{
										// use break to break up the boxes
										echo '<br>';
									}
								}

								// if there is no winner
								if ($winner == 0)
								{
									// print the go button to screen
									echo '<button type="submit" name="submitbtn">GO</button>';
								}

								// if there is a winner value
								else
								{
									// print the play again button
									echo '<button type="button" name="newgamebtn" onClick="window.location.href=\'tictactoe.php\'">PLAY AGAIN</button>';
								}
							}

							// else if no user
							else
							{
								// print message to tell the user to login
								echo "<p style='color:#b3b3b3;'>PLEASE LOG IN TO PLAY!</p>
									<br><br>";
							}
						?>
						<!-- Close php -->

						</form>
						<!-- -->

						<!-- Fill the page out -->
						<br><br><br><br><br><br><br>
						<br><br><br><br><br><br><br>
						<br><br><br><br><br><br><br>
						<br><br><br><br><br><br><br>

					</div>
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