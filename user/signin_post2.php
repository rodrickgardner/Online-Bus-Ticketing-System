<?php

require_once('function.php');
dbconnect();
session_start();

$ss= $_GET["bid"];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	if (attempt($_POST['username'], $_POST['password'])) {
		redirect('busseats.php?bid='.$ss);
	}
	else {
		redirect('login2.php?bid='.$ss.'&error=' . urlencode('Wrong username or password. Please try again...'));
	}
}

?>