<!-- the first include should be config.php -->
<?php require_once('admin/config.php'); ?>
<?php define ('ROOT_PATH', realpath(dirname(__FILE__))); ?>
<?php require_once(ROOT_PATH . '/funciones.php'); ?>

<?php
/* Evitamos que se ingrese al formulario si ya está logeado */
if (isset($_SESSION['usuario'])) {
	header('Location: admin/index.php');
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
		header('Location: admin/index.php');
	}
}

require 'views/login.view.php';

?>