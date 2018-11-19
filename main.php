<?php

$password = "your_password";

if (isset($_POST['submit'])) {
	if ($_POST['password'] == $password) {
		echo ('You got the right password.');
	} else {
		echo ('You did not get the correct password! Please try again!');
	}
}



?>

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
<input type="text" name="password">
<input type="submit" name="submit">
</form>
