<?php

	// new variables for server and data base information
	$servername = "localhost";
	$dBUsername = "root";
	$dBPassword = "";

	// login system database
	$dbMainDataBase = "piquant_games_store";

	// connect to the login database
	$ConnectDataBase = mysqli_connect($servername, $dBUsername, $dBPassword, $dbMainDataBase);

	// Check connection to database
	if (!$ConnectDataBase)
	{
		// display error message and kill connection
		die("Connection failed: ".mysqli_connect_error());
	}