<?php

	// new function for setting comments
	function SetComments($conn)
	{
		// if the submit button is pressed
		if (isset($_POST['CommentSubmit']))
		{
			// new varaibles for comment data
			$uid = $_POST['uid'];
			$date = $_POST['date'];
			$message = $_POST['message'];

			// new varaible for inserting data in the database
			$sql = "INSERT INTO comments (uid, date, message) VALUES ('$uid', '$date', '$message')";

			// query the database
			$result = $conn->query($sql);
		}
	}

	// new function for getting comment
	function GetComments($conn)
	{
		// get comments from sql
		$sql = "SELECT * FROM comments";

		// query the database
		$result = $conn->query($sql);

		// fetch the comments as an array
		while ($row = $result->fetch_assoc())
		{
			// get comments from database that have correct user tag
			$userId = $row['uid'];
			$userSql = "SELECT * FROM users WHERE idUsers='$userId'";
			$userResult = $conn->query($userSql);

			// get all comments with user tags
			if ($userRow = $userResult->fetch_assoc())
			{
				// display user, date and message of the comments
				echo "<div class='comment-box'>
						<p style='font-weight:bold; font-size:18px;'>".$userRow['uidUsers']."</p>
						<p style='font-size:12px; margin-top:-10px; color:#6e6e6e;'>".$row['date']."</p>
						<p style='margin-bottom:0px;'>".nl2br($row['message'])."</p>";

				// if the user is logged in
				if (isset($_SESSION['userId']))
				{
					// check if the user matches a comment
					if ($_SESSION['userId'] == $userRow['idUsers'])
					{
						// display the buttons for editing and deleting comments
						echo "<form class='comment-box-editform' method='POST' action='comment-edit.php'>
									<input type='hidden' name='cid' value='".$row['cid']."'>
									<input type='hidden' name='uid' value='".$row['uid']."'>
									<input type='hidden' name='date' value='".$row['date']."'>
									<input type='hidden' name='message' value='".$row['message']."'>
									<button>EDIT</button>
								</form>

								<form class='comment-box-deleteform' method='POST' action='".DeleteComments($conn)."'>
									<input type='hidden' name='cid' value='".$row['cid']."'>
									<button type='submit' name='commentDelete'>DELETE</button>
								</form>";
					}
				}

				// close the comment section of html
				echo "</div>";
			}
		}
	}

	// new function for editing comments
	function EditComments($conn)
	{
		// if the submit button is pressed
		if (isset($_POST['CommentSubmit']))
		{
			// new varaibles for comment data
			$cid = $_POST['cid'];
			$uid = $_POST['uid'];
			$date = $_POST['date'];
			$message = $_POST['message'];

			// new varaible for updating data in the database
			$sql = "UPDATE comments SET message='$message' WHERE cid='$cid'";

			// query the database
			$result = $conn->query($sql);

			// return to the privous page
			Redirect("zombie.php");
		}
	}

	// new function for deleting comments
	function DeleteComments($conn)
	{
		// if the submit button is pressed
		if (isset($_POST['commentDelete']))
		{
			// new varaibles for comment data
			$cid = $_POST['cid'];

			// new varaible for deleting data in the database
			$sql = "DELETE FROM comments WHERE cid='$cid'";

			// query the database
			$result = $conn->query($sql);

			// return to the previous page
			Redirect("zombie.php");
		}
	}

	// new function for redirecting website to a set page
	function Redirect($url)
	{
		// if the header has not been sent
		if (!headers_sent())
		{
			// return to set url
			header('Location: '.$url);

			// exit
			exit;
		}

		// else if the header has been sent
		else
		{
			// return to set url
			echo '<script type="text/javascript">';
			echo 'window.location.href="'.$url.'";';
			echo '</script>';
			echo '<noscript>';
			echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
			echo '</noscript>';

			// exit
			exit;
		}
	}