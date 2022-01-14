<!-- the first include should be config.php -->
<?php require 'assets/php/admin/config.php'; ?>
<?php require 'funciones.php'; ?>

<?php
/* Evitamos que se ingrese al formulario si ya está logeado */
if (isset($_SESSION['usuario'])) {
	header('Location: assets/php/admin/index.php');
}

/* Validamos los datos que se hayan enviado por el formulario */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nombre = sanitizeData($_POST['usuario']);
	$pass = sanitizeData($_POST['pass']);
	$errores = '';

	if (empty($nombre) || empty($pass)) {
		$errores = 'Por favor, captura todos los campos';
	}

	if ($nombre == $blog_admin['usuario'] && $pass == $blog_admin['password']) {
		$_SESSION['usuario'] = $nombre;
		header('Location: assets/php/admin/index.php');
	}
}
?>
<?php require 'assets/php/views/login.view.php'; ?>