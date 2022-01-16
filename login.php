<!-- the first include should be config.php -->
<?php require './assets/php/admin/config.php'; ?>
<?php require 'functions.php'; ?>

<?php
/* Evitamos que se ingrese al formulario si ya está logeado */
if (isset($_SESSION['user'])) {
	header('Location: ./admin.php');
}

/* Validamos los datos que se hayan enviado por el formulario */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$user = sanitizeData($_POST['user']);
	$pass = sanitizeData($_POST['pass']);
	$errores = '';

	if (empty($user) || empty($pass)) {
		$errores = 'Por favor, captura todos los campos';
	}

	if ($user == $blog_admin['user'] && $pass == $blog_admin['password']) {
		$_SESSION['user'] = $user;
		header('Location: ./assets/php/admin.php');
	}
}
?>
<?php require './assets/php/views/login.view.php'; ?>