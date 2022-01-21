<?php 
// the first include should be config.php
require './assets/php/admin/config.php';
require 'functions.php';

// prevent the user to access in login if is already logged
if (isset($_SESSION['user'])) {
	header('Location: admin.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$user = sanitizeData($_POST['user']);
	$pass = sanitizeData($_POST['pass']);
	$errors = '';

	if (empty($user) || empty($pass)) {
		$errors = 'Please capture all fields';
	} else {
		$sql = 
		'SELECT * FROM users 
		WHERE user = :user';
		$statement = $conn->prepare($sql);
		$statement->execute(array(':user' => $user));
		$results = $statement->fetch();

		if($results){
			password_verify($pass, $results['password']) ? $_SESSION['user'] = $user : $errors = 'Incorrect data';
			header('Location: admin.php');
		} else{
			$errors = 'Incorrect data';
		}
	}
}

require './assets/php/views/login.view.php';
?>