<?php

	date_default_timezone_set('Australia/Melbourne');

?>

<?php
echo "<form>
	<input type='hidden' name='uid' value='Anonymous'>
	<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
	<textarea name='message'></textarea><br>
	<button type='submit' name='submit'>Comment</button>
</form>";"
?>