<?php
	date_default_timezone_set('Europe/Stockholm');
	include 'comments.inc.php';
	include 'dbh.inc.php';
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
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

	<h3>
		Pancakes Recipe
	</h3>
	<p class="image">
		<img src = "pancakespic.jpg"
			alt = "Picture of pancakes"/> </p>
	<br>
	<h4>
		Ingredients
	</h4>
	<ul>
		<li> 1 1/2 cups flour</li>
		<li> 1 1/4 cups milk </li>
		<li> 3 1/2 teaspoons baking powder </li>
		<li> 1 egg </li>
		<li> 1 teaspoon salt </li>
		<li> 3 tablespoons butter, melted </li>
		<li> 1 tablespoon white sugar </li>
	</ul>
	<br>
	<h4>Directions</h4>
	<ul>
		<li> In a large bowl, sift together the flour, baking powder, salt and sugar. Make a well in the center and pour in the milk,
		 egg and melted butter; mix until smooth. </li>
		<li> Heat a lightly oiled griddle or frying pan over medium high heat. Pour or scoop the batter onto the griddle, 
		using approximately 1/4 cup for each pancake. Brown on both sides and serve hot.	</li>
	</ul>
	<br>
		<h4>Comments</h4>
		
<?php
	if (isset($_SESSION['id'])) {
		echo "<form method='POST' action='".setComments($conn)."'>
			<input type='hidden' name='uid' value='".$_SESSION['id']."'>
			<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
			<textarea name='message'></textarea><br>
			<button type='submit' name='commentSubmit'>Comment</button>
		</form>";
	} else {
		echo "You need to be logged in to comment";
	}
	
	getComments($conn);
?>
</body>
	
	
</html>