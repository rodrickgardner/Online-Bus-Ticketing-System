<?php


/*
ini_set('display_errors', 'Off');
error_reporting(-1);
*/
$dbname = "dbbus";
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";






function connectdb()
{
	global $condb,$conms;
    global $dbname, $dbuser, $dbhost, $dbpass,$dbname;
    $conms = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname); //connect mysql
    if(!$conms) return false;
    // $condb = @mysql_select_db($dbname);
    // if(!$condb) return false;
    return true;
}



function dbconnect()
{
	global $pdo;

	try {
		$pdo = new PDO('mysql:host=localhost;dbname=dbbus', 'root', '');
	} catch (PDOException $e) {
		die('MySQL connection fail! ' . $e->getMessage());
	}
}



function insert_new_user($username, $password, $email, $company, $address)
{
	# checking username is already taken
	if (username_exists($username))
		return false;

	# insert new user info
	global $pdo;
	$stmt = $pdo->prepare('
		INSERT INTO users
		(username, password, address, com_name, email)
		values (:username, :password, :address, :company, :email)');

	$stmt->execute( array(':username' => $username, ':password' => md5($password)) );

	if ($pdo->lastInsertId())
		return true;
	else
		return false;
}

function username_exists($username)
{
	global $pdo;
	
	$stmt = $pdo->prepare('
		SELECT id
		FROM users
		WHERE username = :username
		LIMIT 1');

	$stmt->execute( array('username' => $username) );
	return $stmt->fetchColumn();
}

function attempt($username, $password)
{
	global $pdo;
	
	$stmt = $pdo->prepare('
		SELECT id, username
		FROM users
		WHERE username = :username AND password = :password
		LIMIT 1');

	$stmt->execute(array(':username' => $username, 'password' => md5($password)));

	if ($data = $stmt->fetch( PDO::FETCH_OBJ )) {
		# set session
		$_SESSION['username'] = $data->username;
		return true;
	} else {
		return false;
	}
}

function is_user()
{
	if (isset($_SESSION['username']))
		return true;
}

function redirect($url)
{
	header('Location: ' .$url);
	exit;
}

function valid_username($str){
	return preg_match('/^[a-z0-9_-]{3,16}$/', $str);
}

function valid_password($str){
	return preg_match('/^[a-z0-9_-]{6,18}$/', $str);
}





?>