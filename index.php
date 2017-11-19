<?php
	date_default_timezone_set('Europe/Stockholm');
	include 'comments.inc.php';
	include 'dbh.inc.php';
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<!--.-->
		<title>Tasty Recipes</title>
		<link 	rel = "stylesheet"
				type = "text/css"
				href = "style.css"/>
		<meta charset = "utf-8" />
	</head>
	<body>
		<ul class="navbar">
		<li><a href="index.php">Home</a></li>
		<li><a href="calendar.php">Calendar</a></li>
		<li><a href="meatballs.php">Meatballs</a></li>
		<li><a href="pancakes.php">Pancakes</a></li>
		<li class="log"><?php
			if (isset($_SESSION['id'])) {
				echo "You are logged in!";
				echo "<form method='POST' action='".userLogout()."'>
					<button type='submit' name='logoutSubmit'>Logout</button>
				</form>";
			} else {
				echo "<form method='POST' action='".getLogin($conn)."'>
					<input type='text' name='uid'>
					<input type='password' name='pwd'>
					<button type='submit' name='loginSubmit'>Login</button>
				</form>";
			}
		?></li>
	</ul>

	<h3>Tasty Recipes</h3>
	<br>
	<p>
	Welcome to Tasty Recipes! On our calendar page you can find inspiration and meal advice for every day of the month
	</p>
	</body>
	
</html>