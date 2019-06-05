<?php
	
	// if signup submit
	if (isset($_POST['signup-submit'])) 
	{
		// require database connection php
		require 'dbconnect.php';
		
		// new variables
		$username = $_POST['uid'];
		$email = $_POST['mail'];
		$password = $_POST['pwd'];
		$passwordRepeat = $_POST['pwd-repeat'];

		// if any field is empty
		if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat))
		{
			// create error code and display it in search bar
			header("Location: ../index.php?error=emptyfields&uid=".$username."&mail=".$email);
			
			// exit function
			exit();
		}
		
		// else if no valid email or user name is entered
		else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username))
		{
			// creare error code and display it in search bar
			header("Location: ../index.php?error=invalidmailuid");
			
			// exit function
			exit();
		}

		// else if no vaid email is entered
		else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			// creare error code and display it in search bar
			header("Location: ../index.php?error=invalidmail&uid=".$username);
			
			// exit function
			exit();
		}

		// else if no valid username is entered
		else if (!preg_match("/^[a-zA-Z0-9]*$/", $username))
		{
			// creare error code and display it in search bar
			header("Location: ../index.php?error=invaliduid&mail=".$email);
			
			// exit function
			exit();
		}

		// else if password is not equal to the password repeat
		else if ($password !== $passwordRepeat)
		{
			// creare error code and display it in search bar
			header("Location: ../index.php?error=passwordcheck&uid=".$username."&mail=".$email);
			
			// exit function
			exit();
		}

		// else
		else
		{
			// new variables for database connection
			$sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
			$stmt = mysqli_stmt_init($ConnectDataBase);

			// if database is not prepare
			if(!mysqli_stmt_prepare($stmt, $sql))
			{
				// creare error code and display it in search bar
				header("Location: ../index.php?error=sqlerror=");
			
				// exit function
				exit();
			}

			// else
			else
			{
				mysqli_stmt_bind_param($stmt, "s", $username);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);

				// new result check variable
				$resultCheck = mysqli_stmt_num_rows($stmt);

				// if result check is greater than 0
				if($resultCheck > 0)
				{
					// creare error code and display it in search bar
					header("Location: ../index.php?error=usertaken&mail=".$email);
			
					// exit function
					exit();
				}

				// else
				else
				{
					// new variable for inserting data
					$sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
					
					// initiate database connection
					$stmt = mysqli_stmt_init($ConnectDataBase);

					// if database is not prepare
					if (!mysqli_stmt_prepare($stmt, $sql))
					{
						// creare error code and display it in search bar
						header("Location: ../index.php?error=sqlerror");
			
						// exit function
						exit();
					}

					// else
					else
					{
						// create new varible to has password
						$hashedPwd = password_hash($password, PASSWORD_DEFAULT);

						// bind params in database
						mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
						mysqli_stmt_execute($stmt);

						// creare success code and display it in search bar
						header("Location: ../index.php?signup=success");
			
						// exit function
						exit();
					}
				}
			}
		}

		// close connection to the database
		mysqli_stmt_close($stmt);
		mysqli_close($ConnectDataBase);

	}

	// else
	else
	{
		// return to the index.php
		header("Location: ../index.php");
		
		// exit function
		exit();
	}