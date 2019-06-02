<?php

	// new variables for server and data base information
	$servername = "localhost";
	$dBUsername = "root";
	$dBPassword = "";

	// login system database
	$dbLoginSystem = "loginsystemsd3";

	// connect to the login database
	$ConnectLogin = mysqli_connect($servername, $dBUsername, $dBPassword, $dbLoginSystem);

	// Check connection to database
	if (!$ConnectLogin)
	{
		// display error message and kill connection
		die("Connection failed: ".mysqli_connect_error());
	}