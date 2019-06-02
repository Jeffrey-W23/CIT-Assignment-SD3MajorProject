<!-- Main -->
<main>

	<!-- Open php code -->
	<?php
		
		// if there is a problem signing in or logging in
		if (isset($_GET['error']))
		{
			// if the error is sqlerror
			if ($_GET["error"] == "sqlerror")
			{
				// display sql error message
				alert('SQL Error!');
			}

			// else if the error is wrongpwd
			else if ($_GET["error"] == "wrongpwd")
			{
				// display wrong password message
				alert('Incorrect password!');
			}

			// else if the error is nouser
			else if ($_GET["error"] == "nouser")
			{
				// display wrong username message
				alert('Incorrect username!');
			}

			// else if the error is emptyfields
            if ($_GET['error'] == "emptyfields")
            {
            	// display empty fields message
                alert('Fill in all fields!');
            }

            // else if the error is invaliduidmail
            else if ($_GET["error"] == "invaliduidmail")
            {
            	// display invalid user/email message
                alert('Invalid username and email!');
            }

            // else if the error is invaliduid
            else if ($_GET["error"] == "invaliduid")
            {
            	// display invalid user message
                alert('Invalid username!');
            }

            // else if the error is invalidmail
            else if ($_GET["error"] == "invalidmail")
            {
            	// display invalid email message
                alert('Invalid email!');
            }

            // else if the error is passwordcheck
            else if ($_GET["error"] == "passwordcheck")
            {
            	// display password unmatched message
                alert('Your passwords do not match!');
            }

            // else if the error is usertaken
            else if ($_GET["error"] == "usertaken")
            {
            	/// display user taken message
                alert('Username is already taken!');
            }
		}

		// else if user is logged in
		else if (isset($_GET["login"]))
		{
			// display login success message
			alert('Login successful!');
		}

		// else if user is signed in
        else if (isset($_GET["signup"]))
        {
        	// display signup success message
            alert('Signup successful!');
        }

		// function to send alert messages to browser
        function alert($msg) 
        {
            // Display message with passed in param
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }
	?>