<?php
	
	//
	require "header.php";
?>

<main>
	<h1>Signup</h1>

	<?php
		
		//
		if (isset($_GET['error']))
		{
			//
			if ($_GET['error'] == "emptyfields")
			{
				echo '<p>Fill in all fields!</p>';
			}

			//
			else if ($_GET["error"] == "invaliduidmail")
			{
				echo '<p>Invalid username and email!</p>';
			}

			//
			else if ($_GET["error"] == "invaliduid")
			{
				echo '<p>Invalid username!</p>';
			}

			//
			else if ($_GET["error"] == "invalidmail")
			{
				echo '<p>Invalid email!</p>';
			}

			//
			else if ($_GET["error"] == "passwordcheck")
			{
				echo '<p>Your passwords do not match!</p>';
			}

			//
			else if ($_GET["error"] == "usertaken")
			{
				echo '<p>Username is already taken!</p>';
			}
		}

		//
		else if (isset($_GET["signup"]))
		{
			echo '<p>Signup successful!</p>';
		}
	?>

	<form action="includes/signupincludes.php" method="post">
		<input type="text" name="uid" placeholder="Username">
		<input type="text" name="mail" placeholder="Email">
		<input type="password" name="pwd" placeholder="Password">
		<input type="password" name="pwd-repeat" placeholder="Repeat Password">
		<Button type="submit" name="signup-submit">Signup</Button>
	</form>
</main>

<?php

	//
	require "footer.php";
?>