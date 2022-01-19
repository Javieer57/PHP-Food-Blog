<!-- the first include should be config.php -->
<?php require './assets/php/admin/config.php'; ?>
<?php require 'functions.php'; ?>

<?php
validateLogin();

// MySuperSafePassword!

// validate the data that has been sent through the form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$user = sanitizeData($_POST['user']);
	$pass = sanitizeData($_POST['pass']);
	$errores = '';

	if (empty($user) || empty($pass)) {
		$errores = 'Please capture all fields';
	} else {
		$sql = 'SELECT * FROM users WHERE user = :user';
		$statement = $conn->prepare($sql);
		$statement->execute(array(':user' => $user));
		$results = $statement->fetch();

		if($results){
			password_verify($pass, $results['password']) ? $_SESSION['user'] = $user : $errores = 'Incorrect data';
		} else{
			$errores = 'Incorrect data';
		}
	}

}
?>

<?php require './assets/php/views/login.view.php'; ?>