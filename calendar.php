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
		<title>Meal Calendar</title>
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

	<table>
	<tr>
		<th>Monday</th>
		<th>Tuesday</th>
		<th>Wednesday</th>
		<th>Thursday</th>
		<th>Friday</th>
		<th>Saturday</th>
		<th>Sunday</th>
	</tr>
	<tr>
		<td>1 <p>
		<a href="meatballs.html"><img  class="thumbnail" src = "meatballspic.jpg"
			alt = "Picture of meatballs"/></a></p></td>
		<td>2 <p>
		<a href="pancakes.html"><img  class="thumbnail" src = "pancakespic.jpg"
			alt = "Picture of pancakes"/></a></p></td>
		<td>3</td>
		<td>4</td>
		<td>5</td>
		<td>6</td>
		<td>7</td>
	</tr>
	<tr>
		<td>8</td>
		<td>9</td>
		<td>10</td>
		<td>11</td>
		<td>12</td>
		<td>13</td>
		<td>14</td>
	</tr>
	<tr>
		<td>15</td>
		<td>16</td>
		<td>17</td>
		<td>18</td>
		<td>19</td>
		<td>20</td>
		<td>21</td>
	</tr>
	<tr>
		<td>22</td>
		<td>23</td>
		<td>24</td>
		<td>25</td>
		<td>26</td>
		<td>27</td>
		<td>28</td>
	</tr>
	<tr>
		<td>29</td>
		<td>30</td>
		<td>31</td>
		<td>1</td>
		<td>2</td>
		<td>3</td>
		<td>4</td>
	</tr>
	</table>
</body>
	
</html>