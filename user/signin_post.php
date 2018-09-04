<?php

require_once('function.php');
dbconnect();
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	if (attempt($_POST['username'], $_POST['password'])) {
		$_SESSION['username'] = $_POST['username'];
		redirect('schedule.php');
	}
	else {
		redirect('login.php?error=' . urlencode('Wrong username or password. Please try again...'));
	}
}

?>