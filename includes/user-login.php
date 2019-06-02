<?php

	// if login submit
	if(isset($_POST['login-submit']))
	{
		// require database connection php
		require 'dbconnect.php';

		// new variables
		$mailuid = $_POST['mailuid'];
		$password = $_POST['pwd'];

		// if fields are left empty
		if (empty($mailuid) || empty($password))
		{
			// create error code and display it in search bar
			header("Location: ../index.php?error=emptyfields");
		
			// exit function
			exit();
		}

		// else
		else
		{
			// new variables for database connection
			$sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
			$stmt = mysqli_stmt_init($ConnectLogin);

			// if database not prepared
			if(!mysqli_stmt_prepare($stmt, $sql))
			{
				// create error code and display it in search bar
				header("Location: ../index.php?error=sqlerror");
		
				// exit function
				exit();
			}

			// else
			else
			{
				mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
				mysqli_stmt_execute($stmt);

				// new variable for database result
				$result = mysqli_stmt_get_result($stmt);

				// if 
				if($row = mysqli_fetch_assoc($result))
				{
					// new variable for checking password
					$pwdCheck = password_verify($password, $row['pwdUsers']);

					// if password check is false
					if($pwdCheck == false)
					{
						// create error code and display it in search bar
						header("Location: ../index.php?error=wrongpwd");
		
						// exit function
						exit();
					}

					// else if password is true
					else if ($password == true)
					{
						// start session
						session_start();

						// connect to user table
						$_SESSION['userId'] = $row['idUsers'];
						$_SESSION['userUid'] = $row['uidUsers'];

						// create error code and display it in search bar
						header("Location: ../index.php?login=success");
		
						// exit function
						exit();
					}

					// else
					else
					{
						// create error code and display it in search bar
						header("Location: ../index.php?error=wrongpwd");
		
						// exit function
						exit();

					}
				}

				// else
				else
				{
					// create error code and display it in search bar
					header("Location: ../index.php?error=nouser");
		
					// exit function
					exit();
				}
			}
		}
	}

	// else
	else
	{
		// return to the index.php
		header("Location: ../index.php");
		
		// exit function
		exit();
	}