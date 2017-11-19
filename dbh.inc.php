<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'commentsection');

if (!$conn) {
	die("Omae wa mou shindeiru: ".mysqli_connect_error());
}