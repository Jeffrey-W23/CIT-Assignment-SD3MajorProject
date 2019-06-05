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

		<!-- Main content background -->
	    <section class="py-5" style="background-color: #1E1F23;">
	        
	        <!-- Main content frame -->
	        <div class="row" style="margin-left: 20%; margin-right: 20%; padding-left: 35px; padding-right: 35px; padding-bottom: 35px; vertical-align:middle; text-align:center;">
	            
				<!-- page content -->
	            <div class="col-md-12" style="vertical-align:middle;">
					<div class="row" style="vertical-align:middle; background-color: transparent;">

						<!-- page title -->
						<h1 class="col-md-12" style="margin-top:55px; margin-bottom: 55px; text-align:center; color: #b3b3b3;">EDIT COMMENT</h1>
					</div>
					
					<!-- Comment box -->
					<div class="comment-section" style="margin: auto;">

						<!-- Run some php code -->
						<?php

							// new varaibles for comment data
							$cid = $_POST['cid'];
							$uid = $_POST['uid'];
							$date = $_POST['date'];
							$message = $_POST['message'];

							// echo some html code
							echo "<form method='POST' action='".EditComments($ConnectDataBase)."'>
									<input type='hidden' name='cid' value='".$cid."'>
									<input type='hidden' name='uid' value='".$uid."'>
									<input type='hidden' name='date' value='".$date."'>

									<div style='width:100%; vertical-align:middle; margin:auto; text-align:center;'>
										<textarea class='comment-section' style='width:80%; height:100px' name='message'>".$message."</textarea>
										<button style='wdith:100px; height:100px;' type='submit' name='CommentSubmit'>SEND</button>
									</div>

								</form>";
						?>
					</div>
					<!-- Comment box -->

					<!-- Fill the page out -->
					<br><br><br><br><br><br><br>
					<br><br><br><br><br><br><br>
					<br><br><br><br><br><br><br>
					<br><br><br><br><br><br><br>

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