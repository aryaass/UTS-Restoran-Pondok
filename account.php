<?php 

// connect to database
$db = mysqli_connect("localhost", "id16382283_admin", 'AHJN&]jih[1C$qX8', "id16382283_resto");

//echo $_SESSION['captcha'];

// variable declaration
$username 	= "";
$email    	= "";
$fname		= '';
$lname		= '';
$gender		= '';
$birthDate	= '';
$errors   	= array();
$captchaVerivy 	= '';

if(isset($_COOKIE['captcha'])) {
	$captchaVerivy = $_COOKIE['captcha'];
}
// $GLOBALS['user'] = '';

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $email;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values

	$fname 		=  e($_POST['firstName']);
	$lname 		=  e($_POST['lastName']);
	$gender 	=  e($_POST['gender']);
	$birthDate 	=  e($_POST['birthDate']);
	$username   =  e($_POST['username']);
	$email      =  e($_POST['email']);
	$password_1 =  e($_POST['password_1']);
	$password_2 =  e($_POST['password_2']);

	// form validation: ensure that the form is correctly filled
	if (empty($username)) { 
		array_push($errors, "Username is required"); 
	}
	if (empty($email)) { 
		array_push($errors, "Email is required"); 
	}
	if (empty($password_1)) { 
		array_push($errors, "Password is required"); 
	}
	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password_1);//encrypt the password before saving in the database

		if (isset($_POST['user_type'])) {
			$user_type = e($_POST['user_type']);
			$query = 
			"INSERT INTO user (username, email, user_type, password, fname, lname, gender, birthDate) 
				VALUES('$username', '$email', '$user_type', '$password', '$fname', '$lname','$gender','$birthDate')";

			mysqli_query($db, $query);
			header('location: login.php');
			exit;
		}else{
			$query = 
			"INSERT INTO user (username, email, user_type, password, fname, lname, gender, birthDate) 
				VALUES('$username', '$email', 'user', '$password', '$fname', '$lname','$gender','$birthDate')";

			mysqli_query($db, $query);

			// get id of the created user
			$loggedType_id = mysqli_insert_id($db);

			$users = getUserById($loggedType_id); // put logged in user in session=
			header('location: login.php');
			exit;
		}
	}
}

// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM user WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}

if (isset($_GET['logout'])) {
	unset($users);
	session_destroy();
	header("location: index.php");
	exit;
}

// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $username, $errors, $captcha, $captchaVerivy;

	// grap form values
	$username	= e($_POST['username']);
	$password	= e($_POST['password']);
	$captcha	= e($_POST['captcha']);

	// make sure form is filled properly
	if (strcmp($captcha, $captchaVerivy)!=0){
		array_push($errors, "Captcha is Incorrect");
	}
	if (empty($captcha)){
		array_push($errors, "Captcha is required");
	}
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM user WHERE username='$username' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$loggedType = mysqli_fetch_assoc($results);
			// var_dump($loggedType);
			if ($loggedType['user_type'] == 'admin') {		

				$users = $loggedType;
				setcookie("isLoged", $loggedType['id'], time() + (3600),"/");
				setcookie("captcha", $captchaVerivy, time() - (3600),"/");
				header('location: admin/index.php');
				exit;
			}
			else{
				$users = $loggedType;
				setcookie("isLoged", $loggedType['id'], time() + (300),"/");
				setcookie("captcha", $captchaVerivy, time() - (3600),"/");
				header('location: index.php');
				exit;
			}
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}

function isAdmin()
{
	if (isset($users) && $users['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}

function getUser($id){
	global $db;
	$idUser =  $_GET['user'];
	$query = "SELECT * FROM user WHERE id=".$_GET['user']." LIMIT 1";
	$resultsUser = mysqli_query($db, $query);
	$resultsUser = mysqli_fetch_assoc($resultsUser);
	// $welcomeName = $resultsUser['username'];
	return $resultsUser;
}
