<?php

	// Start session, unset and destory instance
	session_start();
	session_unset();
	session_destroy();

	// return to the index page
	header("Location: ../index.php");