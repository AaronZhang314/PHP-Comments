<?php
	date_default_timezone_set('America/Toronto');
	include 'dbh.inc.php';
	include 'comments.inc.php';
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Comments</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
	if (isset($_SESSION['id'])){
		echo "Welcome " . $_SESSION['uid'];
		echo "<form method='POST' action='".userLogout()."'>
			<button type='submit' name='logoutSubmit'>Logout</button>
		</form>";
		echo "You are logged in!";
	}
	else{
		echo "You are not logged in.";
		echo "<br><br>";
		echo "<form method='POST' action='".getLogin($conn)."'>
			<input type='text' name='uid' placeholder = 'Enter Username'>
			<input type='password' name='pwd' placeholder = 'Enter Password'>
			<button type='submit' name='loginSubmit'>Login</button>
		</form>";
	}
?>
<br><br>
	<?php
	getComments($conn);

	if (isset($_SESSION['id'])){
	echo "<form method='POST' action='".setComments($conn)."'>
		<input type='hidden' name='uid' value='".$_SESSION['id']."'>
		<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
		<textarea name='message' placeholder = 'Write a comment...'></textarea><br>
		<button type='submit' name='commentSubmit'>Comment</button>
	</form>";
	}
	else{
		echo "<br><br>Login to comment";
	}
	?>
</body>
</html>