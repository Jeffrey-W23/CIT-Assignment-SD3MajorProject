<?php
	
	// create new array with blank entries
	$box = array('','','','','','','','','','');

	// new variable for winner
	$winner = 0;

	// if the submit button is pressed
	if (isset($_POST['submitbtn']))
	{
		// connect array values to the form values
		$box[0] = $_POST['box0'];
		$box[1] = $_POST['box1'];
		$box[2] = $_POST['box2'];
		$box[3] = $_POST['box3'];
		$box[4] = $_POST['box4'];
		$box[5] = $_POST['box5'];
		$box[6] = $_POST['box6'];
		$box[7] = $_POST['box7'];
		$box[8] = $_POST['box8'];

		// new variable to mark blank spaces avalible
		$blank = 0;

		// check if the player has won
		$winner = CheckWin($box, 'x');

		// loop through each space in the box
		for ($i = 0; $i <= 8; $i++)
		{
			// if the box is empty
			if ($box[$i] == '')
			{
				// there is a blank space
				$blank = 1;
			}
		}

		// if there is a blank space and no winner
		if ($blank == 1 && $winner == 0)
		{
			// i equals a random box within 8
			$i = rand() % 8;

			// while a box is empty
			while ($box[$i] != '')
			{
				// select a random box
				$i = rand() % 8;
			}

			// insert an o into a box
			$box[$i] = 'o';

			// check computer winner
			$winner = CheckWin($box, 'o');
		}

		// if there is no winner
		else if ($winner == 0)
		{
			// set winner to 3
			$winner = 3;

			// print the result to screen
			echo '<p style="color: white; text-transform: uppercase;">Tied game!</p>';
		}
	}

	// new function for checking the winner of the game
	function CheckWin($box, $player)
	{
		// if statement to check each row for a winner
		if ($box[0] == $player && $box[1] == $player && $box[2] == $player || 
			$box[3] == $player && $box[4] == $player && $box[5] == $player ||
			$box[6] == $player && $box[7] == $player && $box[8] == $player ||
			$box[0] == $player && $box[3] == $player && $box[6] == $player ||
			$box[1] == $player && $box[4] == $player && $box[7] == $player ||
			$box[2] == $player && $box[5] == $player && $box[8] == $player ||
			$box[0] == $player && $box[4] == $player && $box[8] == $player ||
			$box[2] == $player && $box[4] == $player && $box[6] == $player)
		{
			// mark a winner and print to screen
			echo '<p style="color: white; text-transform: uppercase;">'.$player.' Wins!</p>';
			return 1;
		}

		// if no winner keep the value 0
		return 0;
	}