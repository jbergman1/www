<?php
	date_default_timezone_set('Europe/Stockholm');
	include 'comments.inc.php';
	include 'dbh.inc.php';
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Meatballs recipe</title>
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
				echo "You are logged in!
					<form method='POST' action='".userLogout()."'>
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

<br>
	<h3>
		Meatballs Recipe
	</h3>
	<p class="image">
		<img src = "meatballspic.jpg"
			alt = "Picture of meatballs"/> </p>
	<br>
	<h4>
		Ingredients
	</h4>
	<ul>
		<li> 4 eggs </li>
		<li> 1 cup milk </li>
		<li> 8 slices white bread, torn </li>
		<li> 2 pounds ground beef </li>
		<li> 1/4 cup finely chopped onion </li>
		<li> 4 teaspoons baking powder </li>
		<li> 1 to 2 teaspoons salt </li>
		<li> 1 teaspoon pepper </li>
		<li> 2 tablespoons shortening </li>
		<li> 2 cans condensed cream of chicken soup, undiluted </li>
		<li> 2 cans condensed cream of mushroom soup, undiluted </li>
		<li> 1 can evaporated milk </li>
		<li> Minced fresh parsley </li>
	</ul>
	<br>
	<h4>
		Directions
	</h4>
	<ul>
		<li> In a large bowl, beat eggs and milk. Add bread; mix gently and let stand for 5 minutes. Add beef, onion, baking powder, 
		salt and pepper; mix well. Shape into 1-in. balls. </li>
		<li> In a large skillet, brown meatballs, a few at a time, in shortening. Place in an ungreased 3-qt. baking dish. In a bowlm stir soups 
		and milk until smooth; pour over meatballs. Bake, uncovered, at 350 degrees for 1 hour. Sprinkle with parsley. Yield: 8-10 servings.
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